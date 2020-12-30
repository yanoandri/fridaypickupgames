<template>
    <div class="col-md-12">
        <h1>Player</h1>
        <div class="card">
            <div class="card-header justify-content-between py-3 d-flex">
                <a href="#" class="btn btn-md btn-primary" @click.prevent="isShowModal = !isShowModal">
                    Upload Attendance
                    <i class="fa fa-upload"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive-md">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Nick Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Alt. Position</th>
                                <th scope="col">Height</th>
                                <th scope="col">Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Cuban</td>
                                <td>Point Guard</td>
                                <td>Shooting guard</td>
                                <td>171</td>
                                <td>90</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <pagination-component />
        <fileupload-modal-component 
            title="Upload Attendance" 
            :isShow="isShowModal" 
            @close="onClose($event)" />
    </div>
    
</template>

<script>
import PaginationComponent from './general/PaginationComponent.vue'
import FileuploadModalComponent from './general/FileuploadModalComponent.vue'

export default {
    name: 'player-component',
    components: {
        PaginationComponent,
        FileuploadModalComponent
    },
    data() {
        return {
            isShowModal: false
        }
    },
    methods: {
        onClose(value) {
            this.isShowModal = value
        }
    }
}
</script>