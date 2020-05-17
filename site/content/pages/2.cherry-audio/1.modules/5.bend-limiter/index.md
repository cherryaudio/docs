title: 'Bend Limiter'
body:
  -
    type: text
    text: '<h1>BEND LIMITER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_bend-limiter.jpg
    alignment: left
  -
    type: text
    text: '<p>The Bend Limiter module is designed to easily configure incoming pitchbend messages received from a MIDI keyboard or DAW to “bend” the pitch of an oscillator up and down in different amounts from zero to 60 semitones (five octaves).<br></p><p>To set up the typical pitchbend behavior, connect the <em>Bend</em>&nbsp;output from the CV Outs section on the I/O panel to the <em>Bend CV In</em>&nbsp;jack, and connect the <em>Out</em>&nbsp;jack to an oscillator’s <em>Keyb CV</em>&nbsp;input (usually this will be in addition to a CV input from a keyboard or sequencer).</p><p>Although intended to scale the positive and negative voltages received from a pitchbend wheel, any signal can be altered. Try running an LFO through it. The amplitude of the positive and negative portions of its waveform can be scaled allowing the depth of modulation to be adjusted in each direction independently!</p><h2>Inputs, Outputs and Controls</h2><p><strong>Bend CV In jack</strong>- For typical pitchbend wheel behavior, connect this input to the <em>Bend</em>&nbsp;output in the CV Outs section of the I/O Panel.</p><p><strong>Bend Up Steps</strong>- Sets the number of semitones a pitchbend wheel will raise the pitch of an oscillator when patched to its <em>Keyb CV</em>&nbsp;input.</p><p><strong>Bend Down Steps</strong>- Sets the number of semitones a pitchbend wheel will lower the pitch of an oscillator when patched to its <em>Keyb CV</em>&nbsp;input.</p><p><strong>Out jack and LEDs</strong>- For typical pitchbend wheel behavior, connect this output to the <em>Keyb CV</em>&nbsp;input of an oscillator. The green and red LEDs give visual feedback of when the output voltage is positive and negative respectively.</p>'
template: documentation
seo:
  description: 'The Bend Limiter module is designed to easily configure incoming pitchbend messages received from a MIDI keyboard or DAW to “bend” the pitch of an oscillator.'
  image: /assets/social-modules/bend-limiter.png
fieldset: documentation
id: 82d11dec-485f-4f36-9542-ac7e83569fe6
