title: 'Poly Glide'
body:
  -
    type: text
    text: '<h1>POLY GLIDE</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-glide.jpg
    alignment: left
  -
    type: text
    text: '<p>The Poly Glide module is used to smoothly transition between polyphonic CVs. This is typically used to slide between pitch CVs allowing chords to be played with portamento.</p><p>This module can be thought of as a stack of standard <a href="https://docs.cherryaudio.com/cherry-audio/modules/glide" target="_blank">Glide</a> modules. Each module in the stack slides between the CVs received by one of the active voices in the patch. The number of voices used in a patch is set using the <em>Number of Voices</em> control in the Poly CV Outs section of the I/O Panel. This setting effects all poly modules in the patch.</p><p>The image below shows a simple polyphonic patch using the Poly Glide module to create portamento.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-glide-image2.jpg
    alignment: left
  -
    type: text
    text: |
      <h2>Inputs, Outputs, and Controls</h2><p><strong>Input jack</strong>- Polyphonic input jack for the control voltages you wish to glide between. Typically this will be patched to the <em>Poly Pitch</em> jack in the Poly CV Outs section of the I/O Panel to create polyphonic portamento.</p><p><strong>Amount</strong>- Adjusts the speed of the glide from 0ms to 5000ms (5 seconds). When the curve is set to&nbsp;<em>Con</em>, this is the amount of time it will take to slide from one CV to the next. When the curve is set to&nbsp;<em>Lin</em>, the slide time will be different depending on the distance between CVs so this is actually adjusting the speed of the glide rather than the time it will take to complete each transition.</p><p><strong>Curve</strong>- Selects between two options for transitioning from one CV to the next. When&nbsp;<em>Lin</em>&nbsp;(linear) is selected, the rate of the glide will remain the same regardless of how far apart the CVs are. Therefore gliding between voltages near one another will take less time than voltages that are farther apart. When&nbsp;<em>Con</em>&nbsp;(constant) is selected, the amount of time it takes to glide between voltages will be the same regardless of how far apart the voltages are. <br>
      </p><p><strong>External Engage jack</strong>- “Mono” CV input that allows the glide module to be enabled and disabled in real time using control voltages. Voltages 2.5V or higher will enable the glide while voltages less than 2.5V will disable it.<br>
      </p><p><strong>Output jack</strong>- Polyphonic output jack which outputs multiple "lanes" of CVs that slide from one voltage to the next. Typically this will be connected to the <em>Poly Keyb CV</em> input of a Poly Oscillator to create polyphonic portamento.</p>
template: documentation
seo:
  description: 'The Poly Glide module is used to smoothly transition between polyphonic CVs. This is typically used to slide between pitch CVs allowing chords to be played with portamento.'
  image: /assets/social-modules/poly-glide.png
id: 760b711e-5b28-4a04-a7b3-5a9f190780a9
slug: poly-glide
blueprint: documentation
