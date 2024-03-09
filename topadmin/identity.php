
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="https://corawealth.com/assets/uploads/logo/favicon.png">
    <title>CoraWealth | Identity Form</title>
        <link href="https://corawealth.com/assets/admin/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://corawealth.com/assets/admin/css/all.min.css"/>
    <link href="https://corawealth.com/assets/global/css/select2.min.css" rel="stylesheet">
    <link href="https://corawealth.com/assets/admin/css/style.min.css" rel="stylesheet">
    <link href="https://corawealth.com/assets/admin/css/custom.css" rel="stylesheet">
    <meta name="csrf-token" content="5GEtz3hMy1JOaGkcKHNIkLyc99uQqm2IJ2PYTnzv"/>
    </head>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

     <?php 
include "header.php";
include "sidebars.php";
?>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Identity Form</h4>

                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item text-muted active"
                                    aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item text-muted" aria-current="page">Identity Form</li>
                            </ol>
                        </nav>
                    </div>

                </div>

            </div>
        </div>

        
    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            <form method="post" action="https://corawealth.com/admin/identity-form/action" class="form-row align-items-center ">
                <input type="hidden" name="_token" value="5GEtz3hMy1JOaGkcKHNIkLyc99uQqm2IJ2PYTnzv">
                <div class="form-group col-md-4 col-lg-4 col-12">
                    <label class="d-block">Address Verification</label>
                    <div class="custom-switch-btn">
                        <input type='hidden' value='1' name='address_verification'>
                        <input type="checkbox" name="address_verification" class="custom-switch-checkbox"
                               id="address_verification"
                               value="0" checked >
                        <label class="custom-switch-checkbox-label" for="address_verification">
                            <span class="custom-switch-checkbox-inner"></span>
                            <span class="custom-switch-checkbox-switch"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group col-md-4 col-lg-4 col-12">
                    <label class="d-block">Identity Verification</label>
                    <div class="custom-switch-btn">
                        <input type='hidden' value='1' name='identity_verification'>
                        <input type="checkbox" name="identity_verification" class="custom-switch-checkbox"
                               id="identity_verification"
                               value="0" checked >
                        <label class="custom-switch-checkbox-label" for="identity_verification">
                            <span class="custom-switch-checkbox-inner"></span>
                            <span class="custom-switch-checkbox-switch"></span>
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-12">
                    <button type="submit"
                            class="btn btn-primary btn-block  btn-rounded mx-2 mt-4">
                        <span>Save Changes</span>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            
            
            <div class="table-responsive">
                <table class="categories-show-table table table-hover table-striped table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Identity Type</th>
                        <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                            </tr>
                    </thead>
                    <tbody>
                                            <tr>
                            <td data-label="SL">1</td>
                            <td data-label="Name">
                                <h5 class="text-dark mb-0 font-16 ">Driving License</h5>
                            </td>
                            <td data-label="Status">
                                <span
                                    class="custom-badge badge-pill bg-success">Active</span>
                            </td>

                                                            <td data-label="Action">
                                    <a href="javascript:void(0)"
                                       data-id="1"
                                       data-name="Driving License"
                                       data-status="1"
                                       data-services_form="{&quot;FrontPage&quot;:{&quot;field_name&quot;:&quot;FrontPage&quot;,&quot;field_level&quot;:&quot;Front Page&quot;,&quot;type&quot;:&quot;file&quot;,&quot;field_length&quot;:&quot;2500&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;},&quot;RearPage&quot;:{&quot;field_name&quot;:&quot;RearPage&quot;,&quot;field_level&quot;:&quot;Rear Page&quot;,&quot;type&quot;:&quot;file&quot;,&quot;field_length&quot;:&quot;2500&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;},&quot;PassportNumber&quot;:{&quot;field_name&quot;:&quot;PassportNumber&quot;,&quot;field_level&quot;:&quot;Passport Number&quot;,&quot;type&quot;:&quot;text&quot;,&quot;field_length&quot;:&quot;20&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;},&quot;Address&quot;:{&quot;field_name&quot;:&quot;Address&quot;,&quot;field_level&quot;:&quot;Address&quot;,&quot;type&quot;:&quot;textarea&quot;,&quot;field_length&quot;:&quot;300&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;}}"
                                       data-toggle="modal" data-target="#editModal" data-original-title="Edit"
                                       class="btn btn-outline-primary btn-rounded btn-sm editButton"><i class="fa fa-edit"></i></a>
                                </td>
                                                    </tr>
                                            <tr>
                            <td data-label="SL">2</td>
                            <td data-label="Name">
                                <h5 class="text-dark mb-0 font-16 ">Passport</h5>
                            </td>
                            <td data-label="Status">
                                <span
                                    class="custom-badge badge-pill bg-success">Active</span>
                            </td>

                                                            <td data-label="Action">
                                    <a href="javascript:void(0)"
                                       data-id="2"
                                       data-name="Passport"
                                       data-status="1"
                                       data-services_form="{&quot;PassportNumber&quot;:{&quot;field_name&quot;:&quot;PassportNumber&quot;,&quot;field_level&quot;:&quot;Passport Number&quot;,&quot;type&quot;:&quot;text&quot;,&quot;field_length&quot;:&quot;25&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;},&quot;PassportImage&quot;:{&quot;field_name&quot;:&quot;PassportImage&quot;,&quot;field_level&quot;:&quot;Passport Image&quot;,&quot;type&quot;:&quot;file&quot;,&quot;field_length&quot;:&quot;1040&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;}}"
                                       data-toggle="modal" data-target="#editModal" data-original-title="Edit"
                                       class="btn btn-outline-primary btn-rounded btn-sm editButton"><i class="fa fa-edit"></i></a>
                                </td>
                                                    </tr>
                                            <tr>
                            <td data-label="SL">3</td>
                            <td data-label="Name">
                                <h5 class="text-dark mb-0 font-16 ">National ID</h5>
                            </td>
                            <td data-label="Status">
                                <span
                                    class="custom-badge badge-pill bg-success">Active</span>
                            </td>

                                                            <td data-label="Action">
                                    <a href="javascript:void(0)"
                                       data-id="4"
                                       data-name="National ID"
                                       data-status="1"
                                       data-services_form="{&quot;FrontPage&quot;:{&quot;field_name&quot;:&quot;FrontPage&quot;,&quot;field_level&quot;:&quot;Front Page&quot;,&quot;type&quot;:&quot;file&quot;,&quot;field_length&quot;:&quot;500&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;},&quot;RearPage&quot;:{&quot;field_name&quot;:&quot;RearPage&quot;,&quot;field_level&quot;:&quot;Rear Page&quot;,&quot;type&quot;:&quot;file&quot;,&quot;field_length&quot;:&quot;500&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;},&quot;NidNumber&quot;:{&quot;field_name&quot;:&quot;NidNumber&quot;,&quot;field_level&quot;:&quot;Nid Number&quot;,&quot;type&quot;:&quot;text&quot;,&quot;field_length&quot;:&quot;10&quot;,&quot;length_type&quot;:&quot;digits&quot;,&quot;validation&quot;:&quot;required&quot;},&quot;Address&quot;:{&quot;field_name&quot;:&quot;Address&quot;,&quot;field_level&quot;:&quot;Address&quot;,&quot;type&quot;:&quot;textarea&quot;,&quot;field_length&quot;:&quot;300&quot;,&quot;length_type&quot;:&quot;max&quot;,&quot;validation&quot;:&quot;required&quot;}}"
                                       data-toggle="modal" data-target="#editModal" data-original-title="Edit"
                                       class="btn btn-outline-primary btn-rounded btn-sm editButton"><i class="fa fa-edit"></i></a>
                                </td>
                                                    </tr>
                                        </tbody>
                </table>
            </div>


        </div>
    </div>


    <div class="modal  fade " id="btn_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <form action="" method="post">
                    <input type="hidden" name="_token" value="5GEtz3hMy1JOaGkcKHNIkLyc99uQqm2IJ2PYTnzv">                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Create New
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>


                    <div class="modal-body">
                        <div class="row ">
                            <div class="col-md-6 form-group">
                                <label for="inputName" class="control-label"><strong>Identity Type
                                        :</strong></label>

                                <select class="form-control  w-100"
                                        data-live-search="true" name="name"
                                        required="">
                                    <option disabled selected>Select Type</option>
                                                                                                                                            </select>
                                <br>
                                <br>
                                                            </div>


                            <div class="col-md-6 form-group ">
                                <label for="inputName" class="control-label d-block"><strong>Status
                                        :</strong></label>

                                <select class="form-control  w-100"
                                        data-live-search="true" name="status"
                                        required="">
                                    <option disabled selected>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                                <br>

                                <br>
                                                            </div>

                            <div class="col-md-12 form-group">
                                <br>
                                <a href="javascript:void(0)" class="btn btn-success btn-sm float-right generate"><i
                                        class="fa fa-plus-circle"></i> Add Field ddd</a>

                            </div>
                        </div>

                        <div class="row addedField mt-3">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary"> Save</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <div class="modal  fade " id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <form action="" method="post">
                    <input type="hidden" name="_token" value="5GEtz3hMy1JOaGkcKHNIkLyc99uQqm2IJ2PYTnzv">                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><i
                                class="fa fa-sync-alt"></i> Update Identity Form
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>


                    <div class="modal-body">
                        <div class="row ">
                            <div class="col-md-6 form-group d-none">
                                <label for="inputName" class="control-label"><strong>Identity Type
                                        :</strong></label>

                                <select class="form-control  w-100 edit_name d-none"
                                        data-live-search="true" name="name"
                                        required="">
                                    <option disabled selected>Select Type</option>
                                    <option value="Driving License">Driving License</option>
                                    <option value="Passport">Passport</option>
                                    <option value="National ID">National ID</option>
                                </select>
                                <br>
                                <br>
                                                            </div>

                            <div class="col-md-6 form-group ">
                                <label for="inputName" class="control-label d-block"><strong>Status
                                        :</strong></label>
                                <select class="form-control  w-100 edit_status"
                                        data-live-search="true" name="status"
                                        required="">
                                    <option disabled>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                                <br>
                                                            </div>

                            <div class="col-md-6 form-group">
                                <br>
                                <a href="javascript:void(0)" class="btn btn-primary btn-rounded btn-sm float-right generate"><i
                                        class="fa fa-plus-circle"></i> Add Field</a>

                            </div>
                        </div>

                        <div class="row addedField mt-3">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary btn-rounded"> Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>





        
        <footer class="footer text-center text-muted">
            Copyrights © 2024 All Rights Reserved By CoraWealth        </footer>

    </div>
</div>


<script src="https://corawealth.com/assets/global/js/jquery.min.js"></script>
<script src="https://corawealth.com/assets/global/js/popper.min.js"></script>
<script src="https://corawealth.com/assets/global/js/bootstrap.min.js"></script>

<script src="https://corawealth.com/assets/admin/js/bootstrap4-toggle.min.js"></script>
<script src="https://corawealth.com/assets/admin/js/app-style-switcher.js"></script>
<script src="https://corawealth.com/assets/admin/js/feather.min.js"></script>
<script src="https://corawealth.com/assets/global/js/notiflix-aio-2.7.0.min.js"></script>
<script src="https://corawealth.com/assets/admin/js/perfect-scrollbar.jquery.min.js"></script>
<script src="https://corawealth.com/assets/admin/js/sidebarmenu.js"></script>
<script src="https://corawealth.com/assets/global/js/select2.min.js"></script>
<script src="https://corawealth.com/assets/admin/js/admin-mart.js"></script>
<script src="https://corawealth.com/assets/admin/js/custom.js"></script>
<script>

    $(document).ready(function () {
        $('.notiflix-confirm').on('click', function () {

        })
    })
</script>
<script src="https://corawealth.com/assets/global/js/axios.min.js"></script>
<script src="https://corawealth.com/assets/global/js/vue.min.js"></script>
<script src="https://corawealth.com/assets/global/js/pusher.min.js"></script>
    <script>
        "use strict";
        $(document).ready(function () {

            $(".generate").on('click', function () {
                var form = `<div class="col-md-12">
                                 <div class="card border-primary">
                                        <div class="card-header  bg-primary p-2 d-flex justify-content-between">
                                            <h5 class="card-title text-white font-weight-bold">Field information</h3>
                                            <button  class="btn  btn-danger btn-sm delete_desc" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label>Field Name</label>
                                                    <input name="field_name[]" class="form-control " type="text" value="" required
                                                           placeholder="Field Name">
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label>Form Type</label>
                                                    <select name="type[]" class="form-control  ">
                                                        <option value="text">Input Text</option>
                                                        <option value="textarea">Textarea</option>
                                                        <option value="file">File upload</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label>Field Length</label>
                                                    <input name="field_length[]" class="form-control " type="number" min="2" value="" required
                                                           placeholder="Length">
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label>Field Length Type</label>
                                                    <select name="length_type[]" class="form-control">
                                                        <option value="max">Maximum Length</option>
                                                        <option value="digits">Fixed Length</option>
                                                    </select>
                                                </div>



                                                <div class="col-md-4 form-group">
                                                    <label>Form Validation</label>
                                                    <select name="validation[]" class="form-control  ">
                                                        <option value="required">Required</option>
                                                        <option value="nullable">Optional</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div> `;

                $('.addedField').append(form)
            });

            $('select').select2({
                width: '100%'
            });


            $(document).on('click', '.editButton', function (e) {
                $('.addedField').html('')

                var obj = $(this).data()
                $('.edit_id').val(obj.id)
                $('.edit_name').val(obj.name).trigger('change');
                $(".edit_status").val(obj.status).trigger('change');
                $(".edit_service_id").val(obj.service_id).trigger('change');

                if (obj.services_form == 'null') {

                } else {
                    var objData = Object.entries(obj.services_form);

                    var form = '';
                    for (let i = 0; i < objData.length; i++) {
                        form += `<div class="col-md-12">

                                    <div class="card border-primary">

                                        <div class="card-header  bg-primary p-2 d-flex justify-content-between">
                                            <h5 class="card-title text-white font-weight-bold">Field information</h3>
                                            <button  class="btn  btn-danger btn-sm delete_desc" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label>Field Name</label>
                                                    <input name="field_name[]" class="form-control"
                                                     value="${objData[i][1].field_level}"
                                                     type="text" required
                                                           placeholder="Field Name">
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label>Form Type</label>
                                                    <select name="type[]" class="form-control  ">
                                                        <option value="text" ${(objData[i][1].type === 'text' ? 'selected="selected"' : '')}>Input Text</option>
                                                        <option value="textarea" ${(objData[i][1].type === 'textarea' ? 'selected="selected"' : '')}>Textarea</option>
                                                        <option value="file" ${(objData[i][1].type === 'file' ? 'selected="selected"' : '')}>File upload</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label>Field Length</label>
                                                    <input name="field_length[]" class="form-control " type="number" min="2" required
                                                    value="${objData[i][1].field_length}"
                                                           placeholder="Length">
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label>Field Length Type</label>
                                                    <select name="length_type[]" class="form-control">
                                                        <option value="max"  ${(objData[i][1].length_type === 'max' ? 'selected="selected"' : '')}>Maximum Length</option>
                                                        <option value="digits"  ${(objData[i][1].length_type === 'digits' ? 'selected="selected"' : '')}>Fixed Length</option>
                                                    </select>
                                                </div>



                                                <div class="col-md-4 form-group">
                                                    <label>Form Validation</label>
                                                    <select name="validation[]" class="form-control  ">
                                                            <option value="required" ${(objData[i][1].validation === 'required' ? 'selected="selected"' : '')}>Required</option>
                                                            <option value="nullable" ${(objData[i][1].validation === 'nullable' ? 'selected="selected"' : '')}>Optional</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </div> `;
                    }
                    $('.addedField').append(form)

                }

            });

            $(document).on('click', '.delete_desc', function () {
                $(this).closest('.card').parent().remove();
            });


        });

    </script>



    <script>
        'use strict';
        let pushNotificationArea = new Vue({
            el: "#pushNotificationArea",
            data: {
                items: [],
            },
            mounted() {
                this.getNotifications();
                this.pushNewItem();
            },
            methods: {
                getNotifications() {
                    let app = this;
                    axios.get("https://corawealth.com/admin/push-notification-show")
                        .then(function (res) {
                            app.items = res.data;
                        })
                },
                readAt(id, link) {
                    let app = this;
                    let url = "https://corawealth.com/admin/push-notification-readAt/0";
                    url = url.replace(/.$/, id);
                    axios.get(url)
                        .then(function (res) {
                            if (res.status) {
                                app.getNotifications();
                                if (link != '#') {
                                    window.location.href = link
                                }
                            }
                        })
                },
                readAll() {
                    let app = this;
                    let url = "https://corawealth.com/admin/push.notification.readAll";
                    axios.get(url)
                        .then(function (res) {
                            if (res.status) {
                                app.items = [];
                            }
                        })
                },
                pushNewItem() {
                    let app = this;
                    // Pusher.logToConsole = true;
                    let pusher = new Pusher("7f333d3a98d4f2", {
                        encrypted: true,
                        cluster: "ap2"
                    });
                    let channel = pusher.subscribe('admin-notification.' + "1");
                    channel.bind('App\\Events\\AdminNotification', function (data) {
                        app.items.unshift(data.message);
                    });
                    channel.bind('App\\Events\\UpdateAdminNotification', function (data) {
                        app.getNotifications();
                    });
                }
            }
        });
    </script>

</body>
</html>
