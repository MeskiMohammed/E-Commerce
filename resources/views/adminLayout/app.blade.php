<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('adminLayout.head')
<!-- end head -->

<body>
    <!-- sidebar -->
    @include('adminLayout.sidebar')
    <!-- end sidebar -->

    <main class="ease-soft-in-out xl:ml-62.5 relative h-screen rounded-xl transition-all duration-200">
        <!-- navbar -->
        @include('adminLayout.navbar')
        <!-- end navbar -->

        <div class="w-full px-6 py-6 mx-auto h-[calc(100%-calc(0.25rem*12))]">

            <div class="flex flex-wrap mt-6  h-[calc(100%-85px)] lg:h-[calc(100%-48px)]">
                @yield('adminContent')
            </div>

            <!-- footer -->
            @include('adminLayout.footer')
            <!-- end footer -->

        </div>
    </main>
</body>
<!-- scripts -->
@include('adminLayout.scripts')
<!-- end scripts -->

</html>