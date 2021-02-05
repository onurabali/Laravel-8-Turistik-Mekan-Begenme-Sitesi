<div>
    <!-- Comment Form -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <li class="list-group-item">
        <div class="blog-comment-form">
            <div class="row margin-top-20">
                <div class="col-md-12">
                    <div class="pull-left">
                        <h3>Leave a Comment</h3>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-md-12">
                    <form class="comment-form" wire:submit.prevent="store">
                        @csrf
                        <label>Subject</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-7 col-md-offset-0">
                                <input class="input" wire:model="subject" type="text" placeholder="subject"/>
                                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>

                        <label>Comment</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-11 col-md-offset-0">
                                <textarea class="input" wire:model="comment" placeholder="Comment" rows="7"></textarea>
                                @error('comment') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-rating">
                                @error('rate') <span class="text-danger">{{$message}}</span>@enderror
                                <strong class="text-uppercase">Your Rating: </strong>
                                <div class="stars">
                                    <input type="radio" id="star5" wire:model="rate" value="5"/><label for="star5"></label>
                                    <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                                    <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                                    <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                                    <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1"></label>
                                </div>
                            </div>
                        </div>
                        @auth
                            <input type="submit" class="btn btn-success" value="Save"></input>
                        @else
                            <a href="/login" class="primary-btn">For Submit Your Comment, Please Login</a>
                        @endauth

                    </form>
                </div>
            </div>
        </div>
    </li>
    <!-- End Comment Form -->
</div>
