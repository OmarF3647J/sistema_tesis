<template>
  <label
    v-bind="$attrs"
    class="block text-sm text-gray-700"
  >
    <span v-if="value">{{ value }}</span>
    <span v-else>
      <slot />
    </span>
  </label>
</template>


<script setup>
defineProps(['value']);
</script>
