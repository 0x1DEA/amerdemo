<template>
  <div class="relative group">
    <div>
      <slot/>
    </div>
    <div class="hidden group-hover:!flex flex-col z-10 absolute -left-[1px] top-full bg-pt-6183 border border-pt-466 min-w-full" style="box-shadow: black 0rem 1rem 3rem -0.5rem">
      <slot name="contents"/>
    </div>
  </div>
</template>
