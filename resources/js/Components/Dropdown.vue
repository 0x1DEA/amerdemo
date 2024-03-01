<template>
  <div class="relative group">
    <div>
      <slot/>
    </div>
    <div class="hidden group-hover:!flex flex-col z-10 absolute -left-[1px] text-white top-full bg-pt-6200 border border-l-[.5rem] border-t-pt-466 border-pt-466 min-w-full shadow-xl">
      <slot name="contents"/>
    </div>
  </div>
</template>
