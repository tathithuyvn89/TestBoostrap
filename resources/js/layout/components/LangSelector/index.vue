<template>
  <!-- Start Dropdown -->
  <b-dropdown right text="Right align">
    <!-- Icon change -->
    <template v-slot:button-content>
      <b-icon icon="globe" font-scale="1.0" class="icon-globe" />
    </template>
    <!-- Options -->
    <b-dropdown-item :disabled="language==='en'" @click="handleSetLanguage('en')">
      English
    </b-dropdown-item>
    <b-dropdown-item :disabled="language==='ja'" @click="handleSetLanguage('ja')">
      Japanese
    </b-dropdown-item>
  </b-dropdown>
  <!-- End Dropdown -->
</template>

<script>
import { MakeToast } from '@/utils/toast_message';
export default {
  computed: {
    language() {
      return this.$store.getters.language;
    },
  },
  methods: {
    handleSetLanguage(lang) {
      this.$i18n.locale = lang;
      this.$store.dispatch('app/setLanguage', lang);
      MakeToast(this, { variant: 'success', title: 'Language', content: 'Successful change language ' + this.$store.getters.language });
    },
  },
};
</script>

<style scoped>
.icon-globe {
  margin-right: 5px;
}
</style>
