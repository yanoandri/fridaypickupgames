<template>
    <div class="col-md-12">
        <h1>Attendance</h1>
        <div class="card">
            <div class="card-header justify-content-between py-3 d-flex">
                <a class="btn btn-md btn-primary" href="#" 
                    @click.prevent="isShowModal = !isShowModal">
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
                                <th scope="col">Position</th>
                                <th scope="col">Alt. Position</th>
                                <th scope="col">Datang jam berapa?</th>
                                <th scope="col">Keterangan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Point Guard</td>
                                <td>Shooting guard</td>
                                <td>16:00</td>
                                <td>OK</td>
                                <td>
                                    <a href="#" class="btn btn-md btn-danger">
                                        Cancel kehadiran
                                    </a>
                                </td>
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
import FileuploadModalComponent from './general/FileuploadModalComponent.vue'
import PaginationComponent from './general/PaginationComponent.vue'


export default {
    name: 'attendance-component',
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

        