title: 'Poly Oscillator'
body:
  -
    type: text
    text: '<h1>POLY OSCILLATOR</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-oscillator.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Poly Oscillator is a polyphonic version of the "standard" <a href="https://docs.cherryaudio.com/cherry-audio/modules/oscillator" target="_blank">Oscillator</a> module with up to 16-voices of polyphony. This module can be thought of as a "stack" of oscillators that each receive individual pitch CVs so that multiple notes can be played simultaneously.</p><p>The number of voices that are used is defined by the <em>Number of Voices</em> setting in the Poly CV Outs section of the I/O Panel. This setting is used for all poly modules in the patch.<br></p><p>Below is a simple polyphonic patch created using the Poly Oscillator and other poly modules.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-oscillator-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2><strong>Inputs, Outputs, and Controls</strong></h2><p><strong>Poly Keyb CV jack</strong>- Accepts a polyphonic CV input for independently controlling the pitch of each oscillator in the "stack." Typically this would come from the <em>Poly Pitch</em> jack in the Poly CV Outs section of the I/O Panel.</p><p><strong>Poly CV Mod jack and attenuator</strong>- Accepts a poly CV input for individually modulating the frequency of the oscillators. A polyphonic envelope, for example, could be patched here so that each individual note in a chord has its own pitch envelope. The bipolar attenuator adjusts the amount of modulation for all voices.</p><p><strong>Mono CV Mod jack and attenuator</strong>- This is a standard "mono" CV input and bipolar attenuator for modulating the frequency of all of the oscillators in the stack simultaneously.&nbsp;</p><p><strong>Hard Sync</strong>- This is a polyphonic input jack for force resetting the oscillators. This can be used, for example, to make each oscillator start from the beginning of its waveform every time it is triggered or to create "sync sweep" oscillator sounds by routing the output of a second Poly Oscillator to the&nbsp;<em>Hard Sync</em>&nbsp;input and sweeping the pitch of the first oscillator.<br></p><p><strong>Range</strong>- Sets the basic pitch of the oscillators, displayed in traditional organ footage.&nbsp;<em>LO</em>&nbsp;will be beneath the audible range and allows the Poly Oscillator to be used as a polyphonic modulation source.</p><p><strong>Fine</strong>- Fine-tune pitch control for all oscillators in the stack.</p><p><strong>Pulse Width</strong>- Sets the width or "duty-cycle" of the pulse wave. It has no effect on any other waveform. Its default setting of 50% outputs a perfect square wave, rich in delicious odd-order harmonics. Moving the knob left or right narrows its width as well as the thickness of sound until it almost disappears at its extremes, and we’ve included a nifty "faux-OLED" display to indicate the current pulse width. All oscillators in the stack are controlled simultaneously by this knob.</p><p><strong>PWM CV In jack and attenuator</strong>- Standard "mono" CV input jack and bipolar attenuator for controlling the pulse width<em> </em>of all of the oscillators. This only effects the pulse waveform.</p><p><strong>Waveform Output Jacks</strong>- These are polyphonic output jacks for the ramp, sawtooth, pulse, sine, and triangle waves. These can be used simultaneously, in any combination. Each jack outputs all oscillator voices via a single poly cable. This will typically be patched to a Poly Amplifier, Poly Filter, Poly Six-Input Mixer,&nbsp; etc.&nbsp;</p><p>Once the signal is ready to be patched to the <em>Main Outs</em>, the "poly" signals will need to be converted back to standard "mono" cables. There are multiple modules that can be used for this including the Poly to Mono CV, Mini Poly to Mono CV, and Poly Spread modules.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Poly Oscillator is a polyphonic version of the "standard" Oscillator module with up to 16-voices of polyphony.'
  image: /assets/social-modules/poly-oscillator.png
fieldset: documentation
id: 8a8fb9d4-521a-4f50-897a-ee5580603a1e
