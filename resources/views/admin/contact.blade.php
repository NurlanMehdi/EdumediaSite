@extends('admin.master')
@section('content')
    dasd
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                Əlaqə
            </div>
            <div class="page_head--description">
                Əlaqəni redaktə et
            </div>
            <hr/>

        </div>
        <div class="page_content">
            <form id="createContact" method="post" action="{{route('save.contact')}}">
                {{csrf_field()}}
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <div class="contactItems">
                    <div class="contactItems--mail">
                        <div class="row no-gutters mx-n1 mb-2 contactItems--mail-item">
                            <div class="col-lg px-1">
                                <div class="form-group">
                                    <div class="form-group_labelGroup">
                                        <label class="customLabel" for="contactItems--mail-1">E-mail</label>
                                        <div class="custom-control custom-switch">
                                            <input  type="checkbox" class="custom-control-input" name="mail_status" id="contactMailStatus-1" value="{{($contact->mail_status ?? 0) == 1 ? 1 : 0}}" {{($contact->mail_status ?? 0) == 1 ? '' : 'checked'}}>
                                            <label class="custom-control-label" for="contactMailStatus-1"></label>
                                        </div>
                                    </div>
                                    <div class="custom_form-control">
                                        <input value="{{$contact->mail ?? ''}}" class="formControl" name="mail" id="contactItems--mail-1" placeholder="E-mail" type="email" required />
                                    </div>
                                </div>
{{--                            </div>--}}
{{--                            <div class="col-lg-1 px-1 d-flex flex-column justify-content-end">--}}
{{--                                <div class="form-group">--}}
{{--                                    <button data-item-length="1" type="button" class="customBtn contactItems--mail-add searchBtn  w-100 r100">--}}
{{--                                        <i class="xin-icon xin-plus"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="contactItems--telephone">
                        <div class="row no-gutters mx-n1 mb-2 contactItems--telephone-item">
                            <div class="col-lg px-1">
                                <div class="form-group">
                                    <div class="form-group_labelGroup">
                                        <label class="customLabel" for="contactItems--telephone-1">Telephone</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="phone_number_status" id="contactItems--telephoneStatus-1" value="{{($contact->phone_number_status ?? 0) == 1 ? 1 : 0}}"  {{($contact->phone_number_status ?? 0) == 1 ? '' : 'checked'}}>
                                            <label class="custom-control-label" for="contactItems--telephoneStatus-1"></label>
                                        </div>
                                    </div>
                                    <div class="custom_form-control">
                                        <input value="{{$contact->phone_number ?? ''}}" class="formControl"  name="phone_number" id="contactItems--telephone-1" placeholder="Telephone" type="tel" required />
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-lg-1 px-1 d-flex flex-column justify-content-end">--}}
{{--                                <div class="form-group">--}}
{{--                                    <button data-item-length="1" type="button" class="customBtn contactItems--telephone-add searchBtn w-100 r100">--}}
{{--                                        <i class="xin-icon xin-plus"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="contactItems--address">
                        <div class="row no-gutters mx-n1 mb-2 contactItems--address-item">
                            <div class="col-lg px-1">
                                <div class="form-group">
                                    <div class="form-group_labelGroup">
                                        <label class="customLabel" for="contactItems--address-1">Address</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="address_status" id="contactItems--addressStatus-1" value="{{($contact->address_status ?? 0) == 1 ? 1 : 0}}"  {{($contact->address_status ?? 0) == 1 ? '' : 'checked'}}>
                                            <label class="custom-control-label" for="contactItems--addressStatus-1"></label>
                                        </div>
                                    </div>
                                    <div class="custom_form-control">
                                        <textarea  class="formControl" name="address" id="contactItems--address-1" placeholder="Address" required >{{$contact->address ?? ''}}</textarea>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-lg-1 px-1 d-flex flex-column justify-content-end">--}}
{{--                                <div class="form-group">--}}
{{--                                    <button data-item-length="1" type="button" class="customBtn contactItems--address-add searchBtn w-100 r100">--}}
{{--                                        <i class="xin-icon xin-plus"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="contactItems--social">
                        <div class="row no-gutters mx-n1 mb-2 contactItems--social-item">
                            <div class="col-lg px-1">
                                <div class="form-group">
                                    <div class="form-group_labelGroup">
                                        <label class="customLabel" for="contactItems--socialFacebook">Facebook</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="facebook_status" id="contactItems--socialFacebookStatus" value="{{($contact->facebook_status ?? 0) == 1 ? 1 : 0}}" {{($contact->facebook_status ?? 0) == 1 ? '' : 'checked'}}>
                                            <label class="custom-control-label" for="contactItems--socialFacebookStatus"></label>
                                        </div>
                                    </div>
                                    <div class="custom_form-control">
                                        <input class="formControl" name="facebook" id="contactItems--socialFacebook" placeholder="Facebook" value="{{$contact->facebook ?? ''}}" type="url" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters mx-n1 mb-2 contactItems--social-item">
                            <div class="col-lg px-1">
                                <div class="form-group">
                                    <div class="form-group_labelGroup">
                                        <label class="customLabel" for="contactItems--socialLinkedin">Linkedin</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="linkedin_status" id="contactItems--socialLinkedinStatus"  value="{{($contact->linkedin_status ?? 0) == 1 ? 1 : 0}}" {{($contact->linkedin_status ?? 0) == 1 ? '' : 'checked'}}>
                                            <label class="custom-control-label" for="contactItems--socialLinkedinStatus"></label>
                                        </div>
                                    </div>
                                    <div class="custom_form-control">
                                        <input class="formControl" name="linkedin" id="contactItems--socialLinkedin" placeholder="Linkedin" value="{{$contact->linkedin ?? ''}}" type="url" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters mx-n1 mb-2 contactItems--social-item">
                            <div class="col-lg px-1">
                                <div class="form-group">
                                    <div class="form-group_labelGroup">
                                        <label class="customLabel" for="contactItems--socialInstagram">Instagram</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="instagram_status" id="contactItems--socialInstagramStatus" value="{{($contact->instagram_status ?? 0) == 1 ? 1 : 0}}" {{($contact->instagram_status ?? 0) == 1 ? '' : 'checked'}}>
                                            <label class="custom-control-label" for="contactItems--socialInstagramStatus"></label>
                                        </div>
                                    </div>
                                    <div class="custom_form-control">
                                        <input class="formControl" name="instagram" id="contactItems--socialInstagram" placeholder="Instagram" type="url" value="{{$contact->instagram ?? ''}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group pt-5">
                    <hr class="mt-5"/>
                    <div class="quickLinks">
                        <button type="button" class="customBtn quickBtn save-contact">
                            Redaktə et
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @stop
@section('js')
    <script>

        $(document).ready(function (){
            $('input[type="checkbox"]').change(function(){
                if(this.value == 0){
                    this.value = 1;
                }else{
                    this.value = 0;
                }
            });

            $('.save-contact').on('click',function (e){
                e.preventDefault();
                e.stopPropagation();

                $('#createContact').append('<input type="hidden" name="contactId" value="{{$contact->id}}">');
                $('#createContact').get(0).submit();
            });
        })
    </script>
@endsection
