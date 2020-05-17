title: 'Drum Oscillator'
body:
  -
    type: text
    text: '<h1><strong>DRUM OSCILLATOR</strong></h1>'
  -
    type: image
    image:
      - /assets/modules/ug_drum-oscillator.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Drum Oscillator module is a simple three-waveform oscillator made especially for creating vintage analog-style drum sounds. The pitch of the oscillator can be tuned from 30 Hz - 1200 Hz and can be modulated via its <em>CV Mod</em> input.&nbsp;</p><p>Analog drum sounds are often made by modulating the pitch of an oscillator with a short envelope to mimic the "smack" of a drum. To create a simple kick sound, first set the pitch knob to a frequency around 60 Hz. Then patch the sine-wave output to an Amplifier module''s&nbsp;<em>Input</em> jack. Next, add a Percussion EG (envelope generator) module and patch its <em>Env Out</em> jack to the <em>CV In</em> jack of the amplifier. Now connect the <em>Trig</em> jack from the CV Outs section of the I/O panel to the <em>Trig In</em> jack of the Perc EG module. You should now hear a short tone when a key is pressed. Adjust the decay settings until you like the length of the drum. Now add a second Perc EG module that will be used to create a pitch envelope. Patch the&nbsp;<em>Env Out</em> jack to the <em>CV Mod</em> input of the Drum Oscillator and set the CV mod amount to about 75%. Finally, connect the <em>Trig In</em> jack to the same <em>Trig</em> output on the I/O panel.&nbsp;</p><p>Although the title seems pretty specific, the applications for this oscillator go far beyond creating drum sounds! Try using one of the waveform outputs as a ring modulation input or use several instances as “operators” in an FM synthesis patch.</p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>CV Mod jack and attenuator</strong>- CV Input for externally controlling the pitch of the oscillator. When the CV Mod amount is at 100% the oscillator’s pitch will be mapped across a keyboard at 1V/Oct like a typical Keyb CV input.</p><p><strong>Pitch</strong>- Sets the frequency of the oscillator from 30 Hz - 1200 Hz.&nbsp;<br></p><p>In order to play this oscillator in tune with a traditional oscillator, the pitch needs to be set to a frequency that is equal to one of the octaves of the note C.&nbsp;</p><p>C1 = 32.70 Hz<br>C2 = 65.41 Hz<br>C3 = 130.81 Hz<br>C4 = 261.63 Hz<br>C5 = 523.25 Hz</p><p><strong>Waveform Outputs</strong>- Three individual outputs for sine, triangle, and square waveform oscillators. These can be used simultaneously in any combination and are all effected by the <em>Pitch</em> knob and <em>CV Mod</em> input.</p>'
template: documentation
seo:
  description: 'A straightforward audio oscillator with CV mod input. Usable in any application, but particularly handy for creating vintage analog drums.'
  image: /assets/social-modules/drum-oscillator.png
fieldset: documentation
id: f5447251-efd8-42a7-a750-75eb143808dc
