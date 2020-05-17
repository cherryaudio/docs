title: 'Super Envelope Generator'
body:
  -
    type: text
    text: '<h1>SUPER ENVELOPE GENERATOR</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-generator.jpg
    alignment: left
  -
    type: text
    text: '<p>Cherry Audio’s Super Envelope Generator is the dream-come-true envelope for modular synthesists. It starts with a complex DAHDSR envelope (Delay-Attack-Hold-Decay-Sustain-Release). The shapes of the <em>Attack</em>, <em>Decay</em>, and <em>Release</em> stages are individually controllable, morphing from logarithmic to linear to exponential, and these shapes can all be modulated via control voltage. On top of that, the length of each stage (and the sustain level) is CV-controllable as well! Powerful visual feedback is provided every step of the way, so you can see at a glance what''s happening with your envelope generator in real-time.</p><p>We are going to assume that you understand how a standard ADSR envelope works. If you are unfamiliar with envelopes in general or need a recap, please check out the documentation for the standard <a href="https://docs.cherryaudio.com/cherry-audio/modules/envelope-generator" target="_blank">Envelope Generator</a> which goes over the basics in detail.</p><h2><strong>DAHDSR Sliders</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-sliders.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>"D" (Delay) slider</strong>- This is the first stage of the envelope and defines the length of time (after receiving a gate signal) the envelope will remain at 0V before starting the <em>Attack</em> phase.</p><p><strong>"A" (Attack) slider</strong>- Defines the length of time it takes for voltage to rise from 0V to 5V.</p><p><strong>“H" (Hold) slider</strong>- Defines how long the envelope will remain at 5V before starting the envelope’s <em>Decay</em> phase.</p><p><strong>"S" (Sustain) slider</strong>- Sets the held voltage level (sustain level) following&nbsp;the <em>Decay</em>&nbsp;phase.&nbsp;</p><p><strong>"R" (Release) slider</strong>- Defines the length of time for voltage to fall from&nbsp;<em>Sustain</em>&nbsp;level to 0V when the gate is released.</p><p><strong>LED stage indicators</strong>- These illuminate to show the currently active envelope stage.</p><p><br></p><h5><em>Below is a diagram of a DAHDSR envelope to help clarify the individual stages.</em></h5>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-generator-dahdsr.jpg
    alignment: left
  -
    type: text
    text: '<h2><strong>DAHDSR CV Control</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-cvs.jpg
    alignment: left
  -
    type: text
    text: '<p>Each of the DAHDSR sliders can be CV-controlled using their respective CV input jack and bipolar attenuator. When controlling a slider’s value externally, the light blue LED meter to the left of each slider shows the modulation in real time.&nbsp;</p>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-blueled-1553649712.jpg
    alignment: left
  -
    type: text
    text: '<p>It is important to understand that the sliders themselves only show the initial value before any modulation. The blue LED meter displays the actual current setting being used for each stage of the envelope.</p><h2><strong>Attack, Decay, and Release Curves</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-curves.jpg
    alignment: left
  -
    type: text
    text: '<p>The shape, or curve, of the <em>Attack</em>, <em>Decay</em>, and <em>Release</em> stages of the envelope can be adjusted individually. Each stage has its own curve control which can morph smoothly from logarithmic, to linear, to exponential.&nbsp;</p><ul><li>A logarithmic curve will move quickly at first, then slower as it approaches its destination (as shown in the <em>Decay</em> and <em>Release</em> <em>Curve </em>displays above).</li><li>A linear curve moves towards the destination voltage at a constant pace.</li><li>An exponential curve will move slowly at first, then quickly “ramp up” as it approaches its destination (as shown in the <em>Attack Curve</em> display above).</li></ul><p>The shape of each curve can be CV-controlled using its respective <em>Curve CV</em> jack and bipolar attenuator and all modulations will be visually displayed in real time.</p><h2>Input</h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-gatein.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Gate In jack</strong>- A gate signal received at this jack triggers the envelope to start when in <em>Normal</em> or <em>One Shot</em> mode.</p><h2>Multiplier</h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-mult.jpg
    alignment: left
  -
    type: text
    text: '<p>These buttons multiply all of the slider’s timed values by one, five, or ten making it possible to have seriously long envelope shapes!&nbsp; As an example, if the <em>Decay</em> slider is set to 1000ms (1 second) with the <em>x1</em> button selected, the decay length will be 5 seconds or 10 seconds with the <em>x5</em> or <em>x10</em> buttons selected respectively.</p><ul><li>Note that these buttons have no effect on the Sustain slider as it is not a time based stage.</li></ul><h2><strong>Segment Mode</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-segment.jpg
    alignment: left
  -
    type: text
    text: '<p>The Super Envelope Generator can be used in three different modes.</p><p><strong>Norm</strong>- This is the normal envelope behavior where when a gate signal is received, the envelope starts at the <em>Delay</em> stage, moves to the <em>Attack</em>, <em>Hold</em> and <em>Decay</em> stages, sustains at the <em>Sustain</em> level, then starts the <em>Release</em> stage when the gate stops.<br></p><p><strong>Loop</strong>- Pressing this button loops the first four stages (DAHD) continuously making the envelope behave more like an LFO. As soon as the button is pressed, the envelope starts at the <em>Delay </em>stage, moves to the <em>Attack</em>, <em>Hold</em> and <em>Decay</em> stages, then loops back to the <em>Delay</em> stage to start over again. The <em>Sustain</em> and <em>Release</em> stages are not used at all in this mode, therefore the <em>Decay</em> stage will always return to 0V before looping back to the beginning.&nbsp;&nbsp;</p><p><strong>One Shot</strong>- This mode also only uses the first four stages (DAHD) of the envelope. Each time a gate signal is received at the <em>Gate In</em> jack, the envelope starts at the <em>Delay</em> stage, moves to the <em>Attack</em>, <em>Hold</em> and <em>Decay</em> stages and then stops. All four stages will be completed regardless of how long the gate signal is held. Note that since the <em>Sustain</em> stage is inactive, the <em>Decay</em> stage returns all the way back to 0V.</p><h2>Outputs</h2>'
  -
    type: image
    image:
      - /assets/modules/ug_super-envelope-insouts.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Env Out and Env Out Inv</strong>- These are the envelope voltage outputs. The&nbsp;<em>Env Out</em>&nbsp;voltage ranges from 0V to +5V, whereas the&nbsp;<em>Env Out Inv</em>&nbsp;jack is an inverted version, with output ranging from 0V to -5V.</p>'
template: documentation
seo:
  description: 'The Super Envelope Generator is a full-featured DAHDSR envelope (Delay-Attack-Hold-Decay-Sustain-Release). The shapes of the attack, decay, and release stages are individually controllable, morphing from exponential to linear to logarithmic, and these shapes can all be modulated via control voltage. On top of that, the length of each stage and the sustain level is CV-controllable as well!\_'
  image: /assets/social-modules/super-envelope-generator.png
id: b6baea45-dbcb-41f3-b1d6-d786bc229739
slug: super-envelope-generator
blueprint: documentation
