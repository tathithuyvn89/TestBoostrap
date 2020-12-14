<script>
export default {
  beforeCreate() {
    const { params, query } = this.$route;
    const { path } = params;
    console.log(this.params);
    console.log(this.path);
    this.$router.replace({ path: '/' + path, query });
  },
  render: function(h) {
    return h();
  },
};
</script>
