<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head title='{{ isset($title) ? $title : "" }}' />

<body>
    <x-navbar />
    <main>
        <div>
            @yield('content')
        </div>
        <x-footer />
    </main>
    <x-script/>
</body>

</html>