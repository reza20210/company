<div class="row">

    @foreach($users as $user)
        <div class="col-sm-6 col-lg-4">
            <div class="team-item">
                <div class="top card-overlay">
                    <img
                        src="{{ $user->photo ? $user->photo->path : "http://www.placehold.it/900x300" }}"
                        alt="Team">
                </div>
                <div class="bottom">
                    <ul>
                        <li>
                        </li>
                        <li>
                        </li>
                        <li>
                        </li>
                    </ul>
                    <h3>
                        <a href="{{ route('user', $user->id) }}">{{ $user->name }}</a>
                    </h3>
                </div>
            </div>
        </div>
    @endforeach

</div>
