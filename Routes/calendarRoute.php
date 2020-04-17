<?php
include('../API/loginCheck.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ημερολόγιο Ασκήσεων</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../Assets/css/style_sidebar.css">

    <link rel='stylesheet' href='../fullcalendar/fullcalendar.css' />
    <script src='../fullcalendar/lib/jquery.min.js'></script>
    <script src='../fullcalendar/lib/moment.min.js'></script>
    <script src='../fullcalendar/fullcalendar.js'></script>

    <script>
        var user = "<?php echo htmlspecialchars($_SESSION["username"]); ?>"
        $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                eventLimit: true,
                events: "../API/fetch-event.php",
                displayEventTime: false,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    if (user === "admin") {
                        var title = prompt('Event Title:');

                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                            $.ajax({
                                url: '../API/add-event.php',
                                data: 'title=' + title + '&start=' + start + '&end=' + end,
                                type: "POST",
                                success: function(data) {
                                    displayMessage("Added Successfully");
                                }
                            });
                            calendar.fullCalendar('renderEvent', {
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                },
                                true
                            );
                        }
                        calendar.fullCalendar('unselect');
                    }
                },

                editable: true,
                eventDrop: function(event, delta) {
                    if (user === "admin") {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: '../API/edit-event.php',
                            data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                            type: "POST",
                            success: function(response) {
                                displayMessage("Updated Successfully");
                            }
                        });
                    }
                },
                eventClick: function(event) {
                    if (user === "admin") {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                            $.ajax({
                                type: "POST",
                                url: "../API/delete-event.php",
                                data: "&id=" + event.id,
                                success: function(response) {
                                    if (parseInt(response) > 0) {
                                        $('#calendar').fullCalendar('removeEvents', event.id);
                                        displayMessage("Deleted Successfully");
                                    }
                                }
                            });
                        }
                    }
                },
                // eventMouseover: function(event) {
                //     var tooltip = new Tooltip(event.el, {
                //         title: event.title,
                //         placement: 'top',
                //         trigger: 'hover',
                //         container: 'body'
                //     });
                // }
            });
        });

        function displayMessage(message) {
            $(".response").html("<div class='success'>" + message + "</div>");
            setInterval(function() {
                $(".success").fadeOut();
            }, 1000);
        }
    </script>

    <style>
        .header-text {
            font-size: 22px;
        }

        #calendar {
            width: 75%;
            min-width: 500px;
            /* min-height: 500px; */
            margin: 0 auto;
        }

        .response {
            height: 60px;
        }

        .success {
            background: #cdf3cd;
            padding: 10px 60px;
            border: #c3e6c3 1px solid;
            display: inline-block;
        }

        
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../Assets/Images/logo_final.png" style="width:200px" />
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="mainRoute.php">Αρχική</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Τάξεις</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="aclass.php">Α΄ Γυμνασίου</a></li>
                        <li><a href="bclass.php">Β΄ Γυμνασίου</a></li>
                        <li><a href="cclass.php">Γ΄ Γυμνασίου</a></li>
                    </ul>
                </li>
                <li>
                    <a href="calendarRoute.php">Ημερολόγιο Ασκήσεων</a>
                </li>
                <li>
                    <a href="links.php">Χρήσιμα Link</a>
                </li>
                <li>
                    <a href="contact.php">Επικοινωνία</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li><a href="../API/logout.php" class="download">Αποσύνδεση</a></li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Ημερολόγιο Ασκήσεων</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="response"></div>
            <div id='calendar'></div>
        </div>
    </div>



    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>