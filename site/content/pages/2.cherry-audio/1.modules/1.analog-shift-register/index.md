title: 'Analog Shift Register'
body:
  -
    type: text
    text: '<h1>ANALOG SHIFT REGISTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_analog-shift-register.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Analog Shift Register is an eight-stage analog-style shift register that can be triggered via an internal or external clock source.<br></p><p>The concept behind an analog shift register (ASR) is similar to a sample and hold module which repetitively “samples” an input signal and outputs its voltage until triggered again. In fact the first output of the Analog Shift Register is <strong>exactly</strong>&nbsp;the same as the <a href="/cherry-audio/modules/sample-and-hold">Sample and Hold</a> module. What makes the ASR different is that every time a new sample is taken, the previous sample is “shifted” sequentially to the next output.</p><p>Typically the outputs are used to control the pitch of individual oscillators to create a canonic melody or pattern where the leading oscillator voice is “followed” by multiple subsequent voices.</p><h2>Inputs, Outputs and Controls</h2><p><strong>Input jack</strong>- This is the input jack for the audio or control signal that will be sampled.</p><p><strong>Ext Trigger jack</strong>- A 5V pulse or gate received at this jack will externally trigger the module.</p><p><strong>Trigger Source</strong>- The buttons <em>Int</em>&nbsp;and <em>Ext</em>&nbsp;select between the internal and external trigger source.</p><p><strong>Rate</strong>- Controls the rate of the internal trigger source from 0.02 Hz - 50 Hz.</p><p><strong>1-8 output jacks</strong>- These are the jacks where the sampled voltages will be output. Each sampled CV will initially be available at the first output and shifted sequentially to the next output with each following trigger. Note that voltages from the eighth output are not shifted back to the first output.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Analog Shift Register is an eight-stage analog-style shift register that can be triggered via an internal or external clock source.'
  image: /assets/social-modules/analog-shift-register.png
fieldset: documentation
id: e568b5c2-5c3d-48d4-afe3-f2a845d314c9
