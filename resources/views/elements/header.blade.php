<nav class="bg-white py-3 px-4 md:py-4 md:px-4 mt-0 w-full page-header border-b-2 sticky top-0">
    <div class="flex justify-between items-center relative">
        <div class="flex flex-col lg:flex-row items-center w-full lg:w-auto">
            <div class="h-8 md:h-12 w-56 md:w-[250px] lg:m-0 mx-auto">
                <a href="/" class="h-full w-full flex items-center">
                    <p class="text-3xl lg:ml-4">LOGO</p>
                </a>
            </div>
        </div>
        <div class="flex items-center">
            @if(auth()->check())
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary font-normal border btn-sm px-8 mr-4 btn-icon">Login</a>
                <a href="" class="btn btn-primary font-normal btn-sm btn-icon px-8">
                    Register<i class="fa fa-arrow-right fa-fw text-xs"></i>
                </a>
            @endif
        </div>
    </div>
</nav>