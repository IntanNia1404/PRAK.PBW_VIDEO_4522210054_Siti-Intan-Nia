 <a {{$attributes}} 
 class="{{ request()->fullUrlIs(url($href)) ? "bg-zinc-800 text-white" : "text-zinc-300 hover:bg-zinc-800 hover:text-white" }} block rounded-md px-3 py-2 text-sm font-medium">
    {{$slot}}
</a>