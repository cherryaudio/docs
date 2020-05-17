title: 'Mod Wheel Assistant'
body:
  -
    type: text
    text: '<h1><strong>MOD WHEEL ASSISTANT</strong></h1>'
  -
    type: image
    image:
      - /assets/modules/ug_mod-wheel-assistant.jpg
    alignment: left
  -
    type: text
    text: '<p>The Mod Wheel Assistant is a handy “helper” module designed to make configuring mod-wheel controlled LFO routings quick and easy. The module has a full-featured internal LFO whose amplitude is scaled by the voltage received at the <em>Mod Wheel In</em> jack. An attenuator is also included at the output to scale the overall depth of modulation.</p><p>Typically the <em>Mod Wheel</em> output jack from the CV Outs section of the I/O panel will be connected to the module’s <em>Mod Wheel In</em> jack. Mod wheel messages sent from your MIDI keyboard or DAW will then control the amplitude of the internal LFO which in turn increases or decreases the amount of modulation it imparts on its destination.&nbsp;<br></p><p>A typical application would be to use the mod wheel to adjust the amount of vibrato (pitch modulation) in a patch. To set this up, patch the <em>Mod Wheel</em> jack from the CV Outs section of the I/O panel to the Mod Wheel Assistant’s <em>Mod Wheel In</em> jack and patch the <em>Output</em> jack to the Keyb<em> </em>CV or<em> </em>Freq Mod<em> </em>input of an oscillator.<br></p><p>Remember that any type of control signal can be patched to the <em>Mod Wheel In</em> jack. An envelope, sequencer, or LFO could be used to modulate the depth of the internal LFO in the same way that a mod wheel allows you to control it manually.<br></p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>Mod Wheel In jack</strong>- Patch the <em>Mod Wheel</em> jack from the CV Outs section of the I/O panel to this input to control the internal LFO''s amplitude manually with the mod wheel of a MIDI keyboard controller.&nbsp;</p><p><strong>Frequency</strong>- Sets the frequency, or rate, of the internal LFO.</p><p><strong>Pol</strong>- Sets the polarity of the LFO. With the mod wheel and the <em>Amount</em> knob all the way up,&nbsp;<em>Bi</em>&nbsp;will output a bipolar LFO ranging from -5V to 5V,&nbsp; + will output an LFO ranging from 0V to 5V and&nbsp; - will range from -5V to 0V.&nbsp;</p><p><strong>Pulse Width</strong>- Adjusts the width, or “duty-cycle,” of the LFO when the pulse wave is selected. At 50%, a symmetrical square wave is produced, meaning the positive and negative portions of the cycle are equal lengths. As the knob is turned clockwise, the positive portion of the LFO cycle is increased; as it is turned counter-clockwise, the positive portion of the cycle is decreased.&nbsp;<br></p><p><strong>Waveforms</strong>- These six buttons select the waveform of the LFO. Shape options are pulse, random (i.e. sample and hold), sine, ramp up, ramp down and triangle.<br></p><p><strong>Amount</strong>- This is a second stage of attenuation that limits the maximum amount of modulation imparted by the LFO.&nbsp;<br></p><p><strong>Output</strong>- Outputs the scaled internal LFO signal. Connect this jack to the CV input of the parameter whose modulation depth will be controlled via the mod wheel.&nbsp;<br></p>'
template: documentation
seo:
  description: 'Handy "helper" module for configuring mod-wheel controlled LFO routings including a full-featured bipolar LFO.'
  image: /assets/social-modules/mod-wheel-assistant.png
fieldset: documentation
id: c5f5b45a-f46e-4b05-a544-dc0d06a8f778
