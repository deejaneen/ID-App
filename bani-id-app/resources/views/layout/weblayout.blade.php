<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/flatly/bootstrap.rtl.min.css" rel="stylesheet"
        crossorigin="anonymous">

    {{-- Stylesheet for icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />





<body>
    @include('layout.websitenav')


    @yield('dashboard')
    @yield('adminpanel')
    @yield('createid')

    {{-- Stylesheet for font from google fonts --}}
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#createTogglebtn').click(function(e) {
                e.preventDefault();

                $('#createCard').toggle();
                $('#editCard').toggle();
            });

            $('#editTogglebtn').click(function(e) {
                e.preventDefault();

                $('#editCard').toggle();
                $('#createCard').toggle();

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#EditIDTable').DataTable();
         
            // $('#EditIDTable').DataTable({
            //     "paging": false,
            //     "pageLength": 5,
            //     "lengthMenu": [5, 10, 15, 20],
            //     "columnDefs": [{
            //         "targets": "_all", // Corrected target to be a string "_all"
            //         "className": "dt-head-left"
            //     }],

            // });

        });
    </script>
</body>

</html>
