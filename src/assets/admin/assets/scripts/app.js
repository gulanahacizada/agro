$(document).ready(function() {

    /*====================================================================================================================*/
    /* Data Table */
    /*====================================================================================================================*/

    $('.data-table').DataTable({
        "language": {
            "sEmptyTable":     "Cədvəldə heç bir məlumat yoxdur",
            "sInfo":           " _TOTAL_ nəticədən _START_ - _END_ arası nəticələr",
            "sInfoEmpty":      "Nəticə Yoxdur",
            "sInfoFiltered":   "( _MAX_ nəticə içindən tapılanlar)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "Səhifədə _MENU_ nəticə göstər",
            "sLoadingRecords": "Yüklənir...",
            "sProcessing":     "Gözləyin...",
            "sSearch":         "Axtarış:",
            "sZeroRecords":    "Nəticə tapılmadı.",
            "oPaginate": {
                "sFirst":    "İlk",
                "sLast":     "Axırıncı",
                "sNext":     "Sonraki",
                "sPrevious": "Öncəki"
            },
            "oAria": {
                "sSortAscending":  ": sütunu artma sırası üzərə aktiv etmək",
                "sSortDescending": ": sütunu azalma sırası üzərə aktiv etmək"
            }
        }
    } );

    /*====================================================================================================================*/
    /* Date Range */
    /*====================================================================================================================*/

    /*$(function() {
        $('.daterange').daterangepicker({
            minDate: false,
            maxDate: moment(),
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            showWeekNumbers: true,
            opens: "left",
            ranges: {
                'Bu gün': [moment(), moment()],
                'Dünən': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Son 7 gün': [moment().subtract(6, 'days'), moment()],
                'Son 30 gün': [moment().subtract(29, 'days'), moment()],
                'Bu ay': [moment().startOf('month'), moment().endOf('month')],
                'Keçən ay': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            locale: {
                firstDay: 1
            },
            applyClass: 'bg-special',
            cancelClass: ''
        })/!*.on('apply.daterangepicker', function(e, picker) {
            location.href = location.origin + location.pathname +
                '?start=' + picker.startDate.format('YYYY-MM-DD') +
                '&end=' + picker.endDate.format('YYYY-MM-DD')
        })*!/;
    });*/

    /*====================================================================================================================*/
    /* Full Calendar */
    /*====================================================================================================================*/

    /*$('#calendar').fullCalendar({
        locale: 'az',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2019-03-05',
        /!*defaultView: 'agendaWeek',
        views: {
            listDay: { buttonText: 'list day' },
            listWeek: { buttonText: 'list week' }
        },*!/
        weekNumbers: true,
        weekNumbersWithinDays: true,
        weekNumberCalculation: 'ISO',
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectHelper: true,
        select: function(start, end) {
            var title = prompt('Event Title:');
            var eventData;
            if (title) {
                eventData = {
                    title: title,
                    start: start,
                    end: end
                };
                $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
            }
            $('#calendar').fullCalendar('unselect');
        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
                title: 'All Day Event',
                start: '2018-03-01'
            },
            {
                title: 'Long Event',
                start: '2018-03-07',
                end: '2018-03-10'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2018-03-09T16:00:00'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2018-03-16T16:00:00'
            },
            {
                title: 'Conference',
                start: '2018-03-11',
                end: '2018-03-13'
            },
            {
                title: 'Meeting',
                start: '2018-03-12T10:30:00',
                end: '2018-03-12T12:30:00'
            },
            {
                title: 'Lunch',
                start: '2018-03-12T12:00:00'
            },
            {
                title: 'Meeting',
                start: '2018-03-12T14:30:00'
            },
            {
                title: 'Happy Hour',
                start: '2018-03-12T17:30:00'
            },
            {
                title: 'Dinner',
                start: '2018-03-12T20:00:00'
            },
            {
                title: 'Birthday Party',
                start: '2018-03-13T07:00:00'
            },
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2018-03-28'
            }
        ]
    });*/

    /*====================================================================================================================*/
    /* Select 2 */
    /*====================================================================================================================*/

    $("select.select").select2({minimumResultsForSearch: 10});

    /*====================================================================================================================*/
    /* Froala Editor */
    /*====================================================================================================================*/

    $('.editor').froalaEditor({
        language: 'az',
        heightMin: 400,
        heightMax: 600,
        linkText: true,
        imageDefaultWidth: 0,
        tableResizer: false,
        toolbarButtons: ['undo', 'redo', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertTable', 'color', 'emoticons', '|', 'selectAll', 'clearFormatting', 'html', '-', 'paragraphFormat', 'quote', 'fontSize', 'align', 'formatOL', 'formatUL', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'code', 'kbd'],
        toolbarButtonsMD: ['undo', 'redo', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertTable', 'color', 'emoticons', '|', 'selectAll', 'clearFormatting', 'html', '-', 'paragraphFormat', 'quote', 'fontSize', 'align', 'formatOL', 'formatUL', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'code', 'kbd'],
        toolbarButtonsSM: ['undo', 'redo', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertTable', 'color', 'emoticons', '|', 'selectAll', 'clearFormatting', 'html', '-', 'paragraphFormat', 'quote', 'fontSize', 'align', 'formatOL', 'formatUL', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'code', 'kbd'],
        tableCellStyles: {
            class1: 'table-header',
            class2: 'table-footer'
        },
        paragraphFormat: {
            N: "Normal",
            Pre: "Pre",
            Header: "header",
            Footer: "footer",
            H1: "Heading 1",
            H2: "Heading 2",
            H3: "Heading 3",
            H4: "Heading 4",
            H5: "Heading 5",
            H6: "Heading 6"
        }
    });

    $('.basic-editor').froalaEditor({
        language: 'az',
        heightMin: 220,
        heightMax: 300,
        linkText: true,
        toolbarSticky: false,
        // toolbarBottom: true,
        toolbarButtons: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript'],
        toolbarButtonsMD: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript'],
        toolbarButtonsSM: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript'],
        toolbarButtonsXS: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript'],
        charCounterCount: false,
        quickInsert: false

    });

    $('.task-editor').froalaEditor({
        language: 'az',
        heightMin: 17,
        heightMax: 300,
        linkText: true,
        toolbarSticky: false,
        toolbarBottom: true,
        toolbarButtons: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'insertImage'],
        toolbarButtonsMD: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'insertImage'],
        toolbarButtonsSM: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'insertImage'],
        toolbarButtonsXS: ['formatOL', 'bold', 'italic', 'underline', 'strikeThrough', 'insertImage'],
        charCounterCount: false

    });

    /*====================================================================================================================*/
    /* Date Picker */
    /*====================================================================================================================*/

    /*var now = moment().format('DD/MM/YYYY, hh:m A');
    var oneHoursLater = moment().add('hours', 1).format('DD/MM/YYYY, hh:m A');

    $('.date').datepicker({
        dateTimeSeparator: " - ",
        language: 'az',
        autoClose: true,
        clearButton: true,
        todayButton: true,
        toggleSelected: false,
    }).val(now);

    $('.date.p1').val(oneHoursLater);*/

});
