import {useDark, useToggle} from "@vueuse/core";
import {ref} from "vue";

export const isDark = ref(useDark({
    selector: '#app'
}));

export const toggleDark = () => {
    useToggle(isDark.value)
}