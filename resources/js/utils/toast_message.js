export const MakeToast = (vm, { variant = null, title, content }) => {
  vm.$bvToast.toast(content, {
    title: title,
    variant: variant,
    toaster: 'b-toaster-bottom-right',
    solid: true,
    autoHideDelay: 1500,
    appendToast: true,
  });
};
