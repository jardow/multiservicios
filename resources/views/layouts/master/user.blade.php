<!DOCTYPE html>
<html lang="en">
    @include('layouts.master.layouts.user_head')
    <body id="page-top">
        @include('layouts.master.layouts.user_nav')
        @include('layouts.master.layouts.user_service')
        @include('layouts.master.layouts.user_portfolio')
        @include('layouts.master.layouts.user_about')
        @include('layouts.master.layouts.user_team')
        @include('layouts.master.layouts.user_clients')
        @include('layouts.master.layouts.user_contact')

        @include('layouts.master.layouts.user_footer')
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="{{asset('/theme/js/scripts.js')}}"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<!-- Core theme JS
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>-->
    </body>
