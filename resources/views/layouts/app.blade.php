<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    @yield('content')
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a> 
            </p>
        </div>
    </footer>
    @include('layouts.footer')
</body>
</html>
