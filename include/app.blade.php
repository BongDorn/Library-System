<!DOCTYPE html>
<html lang="en">

<head>
    @include("include/style")
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    @include("include.sidbar")
    <main class="content">

        @include("include.topbar")

        <div class="row">
            @yield("content")
        </div>

        {{-- chart --}}

    </main>

    <!-- Core -->
    @include("include.script")
</body>

</html>
