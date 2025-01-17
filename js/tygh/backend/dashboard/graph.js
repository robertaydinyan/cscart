(function (_, $) {
  function drawAnalyticsCardGraph(is_day) {
    if (typeof google === "undefined") {
      return false;
    }
    function get_data(div) {
      const $graphView = $(div);
      const $graph = $graphView.closest('[data-ca-analytics-card="graph"]');
      const previousPeriodText = decodeHtml($graph.data('caAnalyticsCardGraphPreviousPeriodText'));
      const currentPeriodText = decodeHtml($graph.data('caAnalyticsCardGraphCurrentPeriodText'));
      const currentPreviousPeriodText = decodeHtml($graph.data('caAnalyticsCardGraphCurrentPreviousPeriodText'));
      const graphContent = $graph.data('caAnalyticsCardGraphContent');
      const dataTable = new google.visualization.DataTable();
      if (is_day) {
        dataTable.addColumn('timeofday', 'Date');
      } else {
        dataTable.addColumn('date', 'Date');
      }
      dataTable.addColumn('number', previousPeriodText);
      dataTable.addColumn('number', currentPeriodText);
      const preparedGraphData = [];
      for (let i = 0; i < graphContent.length; ++i) {
        preparedGraphData[i] = [];
        const item = graphContent[i];
        preparedGraphData[i][1] = +item.prev;
        preparedGraphData[i][2] = +item.cur;
        if (is_day) {
          preparedGraphData[i][0] = [+item.date, 0, 0, 0];
        } else {
          const dateArray = item.date.split(', ');
          const dateArray2 = dateArray[1].slice(1, -1).split('-');
          preparedGraphData[i][0] = new Date(+dateArray[0], dateArray2[0] - dateArray2[1], +dateArray[2]);
        }
      }
      dataTable.addRows(preparedGraphData);
      const dataView = new google.visualization.DataView(dataTable);
      dataView.setColumns([0, 1, 2]);
      const date_formatter = new google.visualization.DateFormat({
        pattern: currentPreviousPeriodText
      });
      date_formatter.format(dataTable, 0);
      return dataView;
    }
    function decodeHtml(html) {
      const txt = document.createElement('textarea');
      txt.innerHTML = html;
      return txt.value;
    }
    var chartwidth = $('[data-ca-analytics-card="graphView"]').width();
    var options = {
      chartArea: {
        left: 7,
        top: 10,
        width: chartwidth,
        height: 208
      },
      colors: ['#a1d6fd', '#4faef9'],
      tooltip: {
        showColorCode: true
      },
      lineWidth: 2,
      series: {
        0: {
          lineDashStyle: [3, 3]
        }
      },
      hAxis: {
        baselineColor: '#eaeef0',
        textStyle: {
          color: '#a3b2bf',
          fontSize: 11
        },
        gridlines: {
          count: 6,
          color: '#f0f5f7'
        }
      },
      legend: {
        position: 'bottom',
        alignment: 'end',
        maxLines: 3,
        textStyle: {
          color: '#6c757d',
          fontSize: 12
        }
      },
      vAxis: {
        minValue: 0,
        baselineColor: '#eaeef0',
        textPosition: 'in',
        textStyle: {
          color: '#a3b2bf',
          fontSize: 11
        },
        gridlines: {
          count: 10,
          color: '#eaeef0'
        }
      }
    };
    if (!is_day) {
      options.hAxis.format = 'MMM d';
    }
    $('[data-ca-analytics-card="graphView"]:visible').each(function (i, div) {
      var dataView = get_data(div);
      if (!google) {
        debugger;
      }
      if (!google.visualization) {
        debugger;
      }
      var chart = new google.visualization.AreaChart(div);
      chart.draw(dataView, options);
    });
  }
  ;
  $(document).ready(function () {
    $.getScript('//www.google.com/jsapi', function () {
      setTimeout(function () {
        // do not remove it - otherwise it will be slow in ff
        google.load('visualization', '1.0', {
          packages: ['corechart'],
          callback: function () {
            const $graph = $('[data-ca-analytics-card="graph"]');
            drawAnalyticsCardGraph($graph.data('caAnalyticsCardGraphIsDay'));
          }
        });
      }, 0);
    });
  });
  $(window).resize(function () {
    if (this.resizeTO) {
      clearTimeout(this.resizeTO);
    }
    ;
    this.resizeTO = setTimeout(function () {
      $(this).trigger('resizeEnd');
    }, 1);
  });

  //redraw graph when window resize is completed
  $(window).on('resizeEnd', function () {
    const $graph = $('[data-ca-analytics-card="graph"]');
    drawAnalyticsCardGraph($graph.data('caAnalyticsCardGraphIsDay'));
  });
})(Tygh, Tygh.$);