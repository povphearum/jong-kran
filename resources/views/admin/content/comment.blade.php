@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Comment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">Comment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
    <!-- /.content-header -->
    <div class="card mx-4 h-50">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>

        <!-- /.card-header -->

        <!-- Conversations are loaded here -->
        <div class="direct-chat-messages ">
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                </div>
                <!-- /.direct-chat-text -->
            </div>
            <div class="">

                <p>Recipe name....</p>

            </div>
            <!-- /.direct-chat-msg -->



    </div>
            </div>
        </div>
    </div>
@endsection
