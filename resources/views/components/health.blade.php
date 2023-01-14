<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        Health and Physical Development
    </h2>
</header>
    <div class=" text-center">
        <div class="mb-2">
            <label class = "font-bold">Do you have any problems with your?</label>
        </div>
        <div>
            <label class = "font-bold">Heigth:</label>
            <label >{{ $studentinfo->height}}</label>
        </div>
        <div>
            <label class = "font-bold">Weight:</label>
            <label >{{ $studentinfo->weight }}</label>
        </div>
        <div>
            <label class = "font-bold">Sight:</label>
            <label >{{ $studentinfo->sight}}</label>
        </div>
        <div>
            <label class = "font-bold">Hearing:</label>
            <label >{{ $studentinfo->hearing }}</label>
        </div>
        <div>
            <label class = "font-bold">Speech:</label>
            <label >{{ $studentinfo->speech }}</label>
        </div>
        <div class="mb-4">
            <label class = "font-bold">General Health:</label>
            <label >{{ $studentinfo->general_health }}</label>
        </div>
        <div>
            <label class = "font-bold">Have you experience any serious sickness in the past?</label>
            <div>
            <label >{{ $studentinfo->question_a1 }}</label>
            </div>
        </div>
        <div>
            <label class = "font-bold">if yes, specify when and describe the effects on you:</label>
            <div>
            <label >{{ $studentinfo->question_a2 }}</label>
            </div>
        </div>
        <div>
            <label class = "font-bold">Any handicap/allergy/aliment?</label>
            <div>
                <label >{{ $studentinfo->question_b1 }}</label>
            </div>
        </div>
        <div>
            <label class = "font-bold">if no, specify (e.g. (asthma))</label>
            <div>
                <label >{{ $studentinfo->question_b2 }}</label>
            </div>
        </div>
    </div>