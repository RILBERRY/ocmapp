<div class="container mx-auto mt-5 border-b dark:border-primary-darker">
  <h3 class="px-10">{{ $title }}</h3>
  <div class="flex items-center px-4 py-4 lg:py-6 flex-wrap ">
    @foreach($items as $item )
    <button class="btn btn-primary m-1">{{$item}}</button>
    @endforeach
  </div>
    <div class="w-full text-right cursor-pointer px-6 ">See more</div>
</div>