        <h1 class="text-center">{{ $lesson->name }}</h1>
        <div class="videoplayer" id="myCustomPlayer">
            <div class="ratio ratio-16x9 bg-secondary">
                <video class="video rounded-2">
                    <source src="{{ route('grammary.video', ['name' => $lesson->video]) }}" type="video/mp4">
                </video>
                <div class="">
                    <div class="controls rounded-2">
                        <button class="btn btn-lg btn-video-playpause" type="button" title="Play Video">
                            <i class="bi bi-play-fill"></i>
                            <i class="bi bi-pause-fill d-none"></i>
                        </button>
                        <div class="px-1 w-100">
                            <div class="progress w-100">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-video-pip" title="Play picture in picture">
                            <i class="bi bi-pip"></i>
                        </button>
                        <button class="btn btn-lg btn-video-fullscreen">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </button>
                        <div class="dropup">
                            <button class="btn btn-lg btn-video-volume" data-bs-toggle="dropdown" title="Volume">
                                <i class="bi bi-volume-mute-fill"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end dropup-volume">
                                <input type="range" class="form-range form-range-volume">
                            </div>
                        </div>
                        <div class="dropup">
                            <button class="btn btn-lg" data-bs-toggle="dropdown" title="More...">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
