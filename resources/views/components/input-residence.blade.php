<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            Residence
        </h2>
    </header>
        <div class=" text-center">
            <div>
                <label class="font-bold">Place of residence: </label>
                {{ $residence->place_residence }}
            </div>
            <div>
                <label class="font-bold">Transportation: </label>
                {{ $residence->transportation }}
            </div>
            <div>
                <label class="font-bold">Do you come to school with bodyguards? </label>
                {{ $residence->question_a1 }}
            </div>
        </div>
    </div>