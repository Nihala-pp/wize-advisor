<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Nihala PP
=========================================================
-->
<!DOCTYPE html>
<html lang="en">
@include('partials.header')

<body class="g-sidenav-show  bg-gray-200">
  @include('partials.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('admin.user_profiles.view_profile') }}">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Mentors</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Mentors</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <img src="{{ asset('public/assets/img/user-avatar.png') }}" class="avatar avatar-sm me-3" alt="xd">
                  <span class="d-sm-inline d-none">Admin</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="{{ route('admin.user_profiles.view_profile') }}" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="{{ route('admin.user_profiles.view_profile') }}" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="{{ route('admin.user_profiles.view_profile') }}" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="{{ route('admin.user_profiles.view_profile') }}">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="{{ route('admin.user_profiles.view_profile') }}">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="{{ route('admin.user_profiles.view_profile') }}">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>crView-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Mentors</h6>
              </div>
            </div>
            <div class="ms-auto my-auto mt-lg-3">
              <div class="ms-auto my-auto">
                <a href="{{ route('admin.mentors.add') }}" class="btn bg-gradient-primary btn-sm mb-0 new-mentor" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" title="Add User">+&nbsp; New Mentor</a>
                <!-- <a class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="tooltip" data-bs-placement="left" title="Add User" data-bs-url="{{ route('admin.users.add') }}" data-bs-selector="" type="button"> -->
                <!-- <span class="btn-inner--text1">{{ __('+ New') . ' ' . __('Mentor') }}</span>
                </a> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#import" fdprocessedid="j9ya3f">
                  +&nbsp; New User
                </button> -->
                <!-- <a href="./new-product.html" class="btn bg-gradient-primary btn-sm mb-0" target="_blank">+&nbsp; New Product</a> -->
                <!-- <div class="modal fade" id="import" tabindex="-1" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog mt-lg-10">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                          <div class="multisteps-form__progress">
                            <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info" fdprocessedid="gzdmwk">
                              <span>1. User Info</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Media" fdprocessedid="tgymh">2. Media</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Socials" fdprocessedid="92lka">3. Socials</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Pricing" fdprocessedid="t5r97">4. Pricing</button>
                          </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="v1ju6i"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row min-vh-80">
                          <div class="col-lg-8 col-md-10 col-12 m-auto">
                            <div class="card">
                              <div class="card-body">
                                <form class="multisteps-form__form" style="height: 391px;">
                                  <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Product Information</h5>
                                    <div class="multisteps-form__content">
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                          <div class="input-group input-group-dynamic">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="133b96">
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                          <div class="input-group input-group-dynamic">
                                            <label for="exampleFormControlInput1" class="form-label">Weight</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="pmczkr">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <label class="mt-4">Description</label>
                                          <p class="form-text text-muted text-xs ms-1 d-inline">
                                            (optional)
                                          </p>
                                          <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                  </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;">
                                                <option value="1"></option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                                <option selected="selected"></option>
                                              </select></span><span class="ql-formats"><button type="button" class="ql-bold" fdprocessedid="jb6m"><svg viewBox="0 0 18 18">
                                                  <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                                  <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                                                </svg></button><button type="button" class="ql-italic" fdprocessedid="xo3q7l"><svg viewBox="0 0 18 18">
                                                  <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                  <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                  <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                                </svg></button><button type="button" class="ql-underline" fdprocessedid="jppnv"><svg viewBox="0 0 18 18">
                                                  <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                  <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                                                </svg></button><button type="button" class="ql-link" fdprocessedid="ugosh7"><svg viewBox="0 0 18 18">
                                                  <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                                  <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
                                                  <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
                                                </svg></button></span><span class="ql-formats"><button type="button" class="ql-list" value="ordered" fdprocessedid="g5gava"><svg viewBox="0 0 18 18">
                                                  <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                                  <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                                  <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                                  <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
                                                  <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path>
                                                  <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
                                                  <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path>
                                                </svg></button><button type="button" class="ql-list" value="bullet" fdprocessedid="yepkpn"><svg viewBox="0 0 18 18">
                                                  <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                                  <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                                  <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                                  <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                                  <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                                  <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                                                </svg></button></span><span class="ql-formats"><button type="button" class="ql-clean" fdprocessedid="jucjck"><svg class="" viewBox="0 0 18 18">
                                                  <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
                                                  <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
                                                  <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
                                                  <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
                                                  <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect>
                                                </svg></button></span></div>
                                          <div id="edit-deschiption" class="h-50 ql-container ql-snow">
                                            <div class="ql-editor" data-gramm="false" contenteditable="true">
                                              <p>Some initial <strong>bold</strong> text</p>
                                            </div>
                                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                            <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6 mt-sm-3 mt-5">
                                          <label class="form-control ms-0">Category</label>
                                          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input" name="choices-category" id="choices-category" hidden="" tabindex="-1" data-choice="active">
                                                <option value="Choice 1">Clothing</option>
                                              </select>
                                              <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">Clothing</div>
                                              </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                              <div class="choices__list" role="listbox">
                                                <div id="choices--choices-category-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Clothing</div>
                                                <div id="choices--choices-category-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">Electronics</div>
                                                <div id="choices--choices-category-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="">Furniture</div>
                                                <div id="choices--choices-category-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 5" data-select-text="Press to select" data-choice-selectable="">Others</div>
                                                <div id="choices--choices-category-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Real Estate</div>
                                              </div>
                                            </div>
                                          </div>
                                          <label class="form-control ms-0">Sizes</label>
                                          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input" name="choices-sizes" id="choices-sizes" hidden="" tabindex="-1" data-choice="active">
                                                <option value="Choice 1">Medium</option>
                                              </select>
                                              <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">Medium</div>
                                              </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                              <div class="choices__list" role="listbox">
                                                <div id="choices--choices-sizes-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Extra Large</div>
                                                <div id="choices--choices-sizes-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 5" data-select-text="Press to select" data-choice-selectable="">Extra Small</div>
                                                <div id="choices--choices-sizes-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">Large</div>
                                                <div id="choices--choices-sizes-item-choice-4" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="">Medium</div>
                                                <div id="choices--choices-sizes-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Small</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next" fdprocessedid="06fgdn">Next</button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Media</h5>
                                    <div class="multisteps-form__content">
                                      <div class="row mt-3">
                                        <div class="col-12">
                                          <label class="form-control mb-0">Product images</label>
                                          <div action="/file-upload" class="form-control border dropzone dz-clickable" id="productImg">
                                            <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Socials</h5>
                                    <div class="multisteps-form__content">
                                      <div class="row mt-3">
                                        <div class="col-12">
                                          <div class="input-group input-group-dynamic">
                                            <label class="form-label">Shoppify Handle</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                          </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                          <div class="input-group input-group-dynamic">
                                            <label class="form-label">Facebook Account</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                          </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                          <div class="input-group input-group-dynamic">
                                            <label class="form-label">Instagram Account</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                          <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                          <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="multisteps-form__panel pt-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Pricing</h5>
                                    <div class="multisteps-form__content mt-3">
                                      <div class="row">
                                        <div class="col-3">
                                          <div class="input-group input-group-dynamic">
                                            <label class="form-label">Price</label>
                                            <input type="email" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" onfocus="focused(this)" onfocusout="defocused(this)">
                                          </div>
                                        </div>
                                        <div class="col-4">
                                          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input" name="choices-sizes" id="choices-currency" hidden="" tabindex="-1" data-choice="active">
                                                <option value="Choice 1">USD</option>
                                              </select>
                                              <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">USD</div>
                                              </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                              <div class="choices__list" role="listbox">
                                                <div id="choices--choices-currency-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 6" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">BTC</div>
                                                <div id="choices--choices-currency-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="">CNY</div>
                                                <div id="choices--choices-currency-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">EUR</div>
                                                <div id="choices--choices-currency-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">GBP</div>
                                                <div id="choices--choices-currency-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Choice 5" data-select-text="Press to select" data-choice-selectable="">INR</div>
                                                <div id="choices--choices-currency-item-choice-6" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="">USD</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-5">
                                          <div class="input-group input-group-dynamic">
                                            <label class="form-label">SKU</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12">
                                          <label class="mt-4 form-label">Tags</label>
                                          <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input" name="choices-tags" id="choices-tags" multiple="" hidden="" tabindex="-1" data-choice="active">
                                                <option value="Choice 1">In Stock</option>
                                                <option value="Two">Out of Stock</option>
                                              </select>
                                              <div class="choices__list choices__list--multiple">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true" data-deletable="">In Stock<button type="button" class="choices__button" aria-label="Remove item: 'Choice 1'" data-button="">Remove item</button></div>
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="2" data-value="Two" data-custom-properties="null" aria-selected="true" data-deletable="">Out of Stock<button type="button" class="choices__button" aria-label="Remove item: 'Two'" data-button="">Remove item</button></div>
                                              </div><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false">
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                              <div class="choices__list" aria-multiselectable="true" role="listbox">
                                                <div id="choices--choices-tags-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Black Friday</div>
                                                <div id="choices--choices-tags-item-choice-5" class="choices__item choices__item--choice choices__item--disabled" role="option" data-choice="" data-id="5" data-value="One" data-select-text="Press to select" data-choice-disabled="" aria-disabled="true">Expired</div>
                                                <div id="choices--choices-tags-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Out of Stock</div>
                                                <div id="choices--choices-tags-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">Sale</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="button-row d-flex mt-0 mt-md-4">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">Send</button>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal" fdprocessedid="hdojaf">Close</button>
                        <button type="button" class="btn bg-gradient-primary btn-sm" fdprocessedid="w8a7g">Upload</button>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button" fdprocessedid="kj6c3">Export</button> -->
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="datatable-basic">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mentor</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Designation</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Registered at</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($mentors as $mentor)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            @php
                              $pro = $mentor->metaData->profile_pic ?? 'user-avatar.png';
                            @endphp
                            <img src="{{ asset('assets/img/').'/'.$pro }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $mentor->name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ 'MTR000'.$mentor->id }}</p>
                            <p class="text-xs text-secondary mb-0">{{ $mentor->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $mentor->metaData ? $mentor->metaData->designation : '' }}</p>
                        <p class="text-xs text-secondary mb-0">{{ $mentor->metaData ? $mentor->metaData->company : '' }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      @if($mentor->email_verified_at)
                        <span class="badge badge-sm bg-gradient-success">Active</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">In-Active</span>
                      @endif

                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $mentor->created_at }}</span>
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('admin.mentors.mentors_profile',[$mentor->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="View Profile">
                          View Profile
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('admin.mentors.experience',[$mentor->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="View Profile">
                          View Experience
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('admin.mentors.expertise',[$mentor->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="View Experience">
                          View Blogs
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('admin.mentors.reviews',[$mentor->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="View Experience">
                          View Reviews
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Projects table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Asana</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$2,500</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">working</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">60%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/github.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Github</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$5,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">done</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Atlassian</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$3,400</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">30%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/bootstrap.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Bootstrap</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$14,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">working</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">80%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$1,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">0%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/devto.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Devto</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$2,300</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">done</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      @include('partials.footer')
    </div>
  </main>
  @include('partials.settings')
  </div>
  <script type="text/javascript">
      const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: true,
        fixedHeight: true
      });
  </script>
  <!--   Core JS Files   -->
</body>
</html>
<style>
  .new-mentor {
    margin-right: 20px;
  }
</style>