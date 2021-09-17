export default () => ({
    open: false,

    query: '',

    results: [],

    show() {
        this.open = true;
        this.$nextTick(() => this.$refs.inputSearch.focus());
    },

    hide() {
        this.open = false;
    },

    mounted() {
        console.log('Alpine js mounted')
    },

    async searchProducts() {
        if (this.query.length > 0) {
            const res = await fetch(`/search/${this.query}`);
            this.results = await res.json();
        } else {
            this.results = [];
        }
    }
})
