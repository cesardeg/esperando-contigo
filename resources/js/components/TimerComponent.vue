<template>
    <div class="timer">
        <div class="segment">
            {{ formatNumber(days) }} <span class="unit">Días</span>
        </div>
        <div class="segment">
            {{ formatNumber(hours) }} <span class="unit">Horas</span>
        </div>
        <div class="segment">
            {{ formatNumber(minutes) }} <span class="unit">Minutos</span>
        </div>
        <div class="segment">
            {{ formatNumber(seconds) }} <span class="unit">Segundos</span>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            reference: window.reference || new Date(),
            days: null,
            hours: null,
            minutes: null,
            seconds: null,
        }),
        mounted() {
            this.initTimer();
        },
        methods: {
            formatNumber(n) {
                if (isNaN(n) || n == null) {
                    return;
                }
                return String(n).padStart(2, 0);
            },
            initTimer() {
                setInterval(() => { this.calculate() }, 1000);
            },
            calculate() {
                let delta = Math.floor(Math.max(0, (this.reference - new Date()) / 1000));

                // calculate (and subtract) whole days
                this.days = Math.floor(delta / 86400);
                delta -= this.days * 86400;

                // calculate (and subtract) whole hours
                this.hours = Math.floor(delta / 3600) % 24;
                delta -= this.hours * 3600;

                // calculate (and subtract) whole minutes
                this.minutes = Math.floor(delta / 60) % 60;
                delta -= this.minutes * 60;

                // what's left is seconds
                this.seconds = delta % 60;
            },
        },
    }
</script>
