<template>
    <div>
        <h3>Zahlungsdaten</h3>
        <div class="form-group row">
            <label for="account" class="col-md-12 col-form-label">{{ __('Card Holder') }}</label>
            <div class="col-md-12">
                <input id="card-holder-name" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="card" class="col-md-12 col-form-label">{{ __('Card') }}</label>
            <div class="col-md-12">
                <div id="card-element"></div>
            </div>
        </div>
        <!-- Stripe Elements Placeholder -->
        <button id="card-button" class="btn btn-block btn-primary" :data-secret="intent.client_secret">
            Update Payment Method
        </button>
    </div>
</template>

<script>
    export default {
        name: "Subscription",
        props: ['intent', 'account'],
        mounted() {
        }
    }
</script>

<style scoped>

</style>
