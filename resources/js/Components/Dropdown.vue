<template>
  <div class="relative group">
    <div>
      <slot/>
    </div>
    <div class="hidden group-hover:!flex flex-col z-10 absolute bg-amber-200 min-w-full">
      <slot name="contents"/>
    </div>
  </div>
</template>
