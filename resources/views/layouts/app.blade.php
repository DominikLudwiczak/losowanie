<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prezenty</title>

        <!-- materialize -->
            <link type='text/css' rel='stylesheet' href='/resources/sass/materialize.css' media='screen,projection'/>

            <!-- icons -->
             <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!-- jquery -->
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        
        <style type='text/css'>
        /* Inactive/Active Default input field color */
            .input-field input[type]:not([readonly]),
            .input-field input[type]:focus:not([readonly]),
            .input-field textarea:not([readonly]),
            .input-field textarea:focus:not([readonly]) {
                border-bottom: 1px solid #969595;
                box-shadow: 0 1px 0 0 #969595;
            }

            /* Inactive/Active Default input label color */
            .input-field input[type]:focus:not([readonly])+label,
            .input-field textarea:focus:not([readonly])+label {
                color: #b07d68;
            }

            /* Active/Inactive Invalid input field colors */
            .input-field input[type].invalid,
            .input-field input[type].invalid:focus,
            .input-field textarea.invalid,
            .input-field textarea.invalid:focus {
                border-bottom: 1px solid #FF003C;
                box-shadow: 0 1px 0 0 #FF003C;
            }

            /* Active/Inactive Invalid input label color */
            .input-field input[type].invalid:focus+label,
            .input-field input[type].invalid~.helper-text::after,
            .input-field input[type].invalid:focus~.helper-text::after, 
            .input-field textarea.invalid:focus+label,
            .input-field textarea.invalid~.helper-text::after,
            .input-field textarea.invalid:focus~.helper-text::after {
                color: #ff6c80;
            }

            /* Active/Inactive Valid input field color */
            .input-field input[type].valid,
            .input-field input[type].valid:focus,
            .input-field textarea.valid,
            .input-field textarea.valid:focus {
                border-bottom: 1px solid #1DB755;
                box-shadow: 0 1px 0 0 #1DB755;
            }

            /* Active/Inactive Valid input label color */
            .input-field input[type].valid:focus+label,
            .input-field input[type].valid~.helper-text::after,
            .input-field input[type].valid:focus~.helper-text::after,
            .input-field textarea.valid:focus+label,
            .input-field textarea.valid~.helper-text::after,
            .input-field textarea.valid:focus~.helper-text::after {
                color: #26a69a;
            }

            body
            {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                margin:0;
            }

            main
            {
                flex: 1 0 auto;
            }
        </style>
    </head>
    <body>
        <main class='py-4'>
            @include('includes.messages')
            @yield('content')
        </main>

        <script type='text/javascript' src='/resources/js/materialize.js'></script>
        <script>
            $(document).ready(function()
            {
                $('select').formSelect();
            });
        </script>
    </body>
</html>