<template>
    <transition name="modal" v-if="isShow">
        <div class="modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>{{ title }}</h5>
                        <button @click="$emit('close', false)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="file" name="attendanceFile" id="attendanceFile">
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: 'fileupload-modal-component',
    props: {
        isShow: {
            type: Boolean,
            required: true
        },
        title: {
            type: String
        }
    }
}
</script>

<style scoped>
.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: table;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-enter{
    opacity: 0;
}

.modal-leave-active{
    opacity: 0;
}

.modal-enter 
.modal-leave-active{
  transition: opacity 0.5s ease;
}
</style>