title: 'Poly CV Converter'
body:
  -
    type: text
    text: '<h1>POLY CV CONVERTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-cv-converter.jpg
    alignment: left
  -
    type: text
    text: '<p>The Poly CV Converter converts polyphonic MIDI input to four individual CV/gate/velocity outs for creating versatile polyphonic patches. Featuring selectable number of voices, MIDI channel, and outputs for converting MIDI pitch bend, mod wheel, aftertouch and volume messages to CV signals. If more than four voices are needed, multiple instances can be chained together using the <em>Overflow </em>MIDI jack to expand the polyphony of a patch.</p><p>Voltage Modular has a number of “Poly” modules that can simplify making polyphonic patches, but doing it the “old-school” way can give you more versatility by being able to customize each voice individually. It’s possible, for example, to use a different filter envelope on each voice so that every note in a chord sounds a little different from one another.&nbsp;</p><h2><strong>MIDI Section</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-cv-converter-midi2.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>MIDI Channel</strong>- Selects which MIDI channel the module will respond to. Set this to the same channel as your controller or external MIDI device. When set to “All,” MIDI notes from all sixteen channels will be received.</p><p><strong>MIDI In jack</strong>- Input jack for receiving MIDI notes from an external controller or MIDI device. This is typically patched to the&nbsp;<em>From Host</em>&nbsp;MIDI jack in the I/O panel or the&nbsp;<em>MIDI Out</em>&nbsp;jack of a MIDI Input module.</p><p><strong>Over Flow jack</strong>- Once the module is using all of its allocated voices, additional MIDI notes received at the <em>MIDI In</em> jack will be passed thru to this jack. Connecting this to the <em>MIDI In</em> jack of a second instance of this module makes it possible to increase the number voices to more than four.</p><h2><strong>Polyphony</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-cv-converter-voices.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Number of Voices</strong>- These buttons select how many voices will be used in the polyphonic patch. Set this to the maximum number of notes you wish to play at the same time. If only three voices of polyphony are needed, setting this to three eliminates the need to set up an oscillator, envelope, amplifier, etc. for the fourth voice which can save space and CPU.</p><h2><strong>Pitch, Gate, and Velocity CVs</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-cv-converter-cvouts.jpg
    alignment: left
  -
    type: text
    text: '<p>Each time a MIDI note is received, the module evaluates which voices are already being used and allocates the note to one of the four available voices. Each voice has the same three output jacks.</p><p><strong>Pitch CV jack</strong>- MIDI note-number messages are converted to CVs for controlling the pitch of an oscillator via their <em>Keyb CV</em> or <em>Pitch CV</em> jacks.</p><p><strong>Gate jack</strong>- MIDI note-on/off messages are converted to gate CVs which are typically patched to the <em>Gate In</em> jack of an envelope. The red LED illuminates to show when each voice is in use.</p><p><strong>Velocity jack</strong>- MIDI note-velocity messages are converted to CVs which can be used for a number of things, but often will be patched to the <em>CV In</em> jack of an Amplifier module to scale an envelope that is controlling the volume of a sound.</p><h2><strong>Mod/Performance Controls</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-cv-converter-mod-controls.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Pitch Bend jack</strong>- MIDI pitch-bend messages are converted to CVs ranging from -5V to +5V. 0V is output when the pitch wheel is in its center, or neutral, position. This will often be patched to the <em>Bend CV In</em> jack of a Bend Limiter module who’s output is patched to the <em>Keyb</em> <em>CV</em> or <em>Pitch CV</em> jack of an oscillator.&nbsp;</p><p><strong>Mod Whl jack</strong>- MIDI mod wheel (CC#1) messages are converted to CVs ranging from 0V when down to +5V when up.</p><p><strong>Aftertouch jack</strong>- MIDI channel-pressure messages (how hard the key is pressed while sustaining) are converted to CVs ranging from 0V to +5V. Note that not all MIDI controllers send aftertouch messages.</p><p><strong>Volume jack</strong>- MIDI volume (CC#7) messages are converted to CVs ranging from 0V to +5V.&nbsp;</p><h2>Let''s look at an example</h2><p>This is a velocity-sensitive patch with four voices of polyphony. You can see that MIDI is received from the <em>From Host</em> MIDI output in the I/O Panel. The Poly CV Converter converts the note messages to four separate pitch, gate, and velocity CV outputs. The <em>Pitch CV</em> jack for each voice is patched to the <em>Keyb CV</em> inputs of the four oscillators. The <em>Gate</em> jacks are patched to the <em>Gate In</em> jack of four envelopes which are patched to the <em>CV In</em> jack of the Amplifier next to them to control the volume of the oscillators. The <em>Velocity</em> jacks from the Poly CV Converter are patched to the <em>CV In</em> jack of a second Amplifier which scales the overall level of each voice. Then finally the output of each secondary Amplifier is fed to a Stereo Mixer which is patched to the Main Outs.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-cv-converter-example2.jpg
    alignment: left
template: documentation
seo:
  description: 'The Poly CV Converter converts polyphonic MIDI input to four individual CV/gate/velocity outs for creating versatile polyphonic patches. Featuring selectable number of voices, MIDI channel, and outputs for converting MIDI pitch bend, mod wheel, aftertouch and volume messages to CV signals.'
  image: /assets/social-modules/poly-cv-converter.png
fieldset: documentation
id: d1a9516d-6c7c-4aaf-96f3-0154b06c3799
