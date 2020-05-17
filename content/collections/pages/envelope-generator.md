title: 'Envelope Generator'
body:
  -
    type: text
    text: '<h1>ENVELOPE GENERATOR</h1><p>The Cherry Audio Envelope Generator module is a standard "ADSR"-style envelope generator most often used to shape amplitude or filter curves. If you''re not familiar with the operation of envelope generators, here''s an overview:</p><p>When a gate voltage is sent to the <em>Gate In</em>&nbsp;jack (or the <em>Gate</em>&nbsp;button is held), the envelope generator outputs a voltage that changes dynamically according to the settings of its four stages.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_envelope_generator_diagram.jpg
    alignment: left
  -
    type: text
    text: '<p>The <em>Attack</em>&nbsp;stage defines how long it takes for the output voltage to rise from 0 to 5 volts. Once the attack stage reaches 5V, it moves to the <em>Decay</em>&nbsp;phase, which defines how long it takes to fall from 5V to the setting of the <em>Sustain</em>&nbsp;phase. Unlike the <em>Attack</em>, <em>Decay</em>, and <em>Release</em>&nbsp;phases, each of which define a time, <em>Sustain</em>&nbsp;simply sets the held voltage level following the <em>Attack</em>&nbsp;and <em>Decay</em>&nbsp;phases - this usually equates to the envelope output level while holding down a key on a keyboard controller. Finally, the <em>Release</em>&nbsp;knob defines the the length of time it takes for the voltage to fall back to 0V when the gate input voltage is removed (typically when you let go of a key on a keyboard controller).</p><p>Now that you''re an ADSR envelope expert, let''s go over the Cherry Audio Envelope Generator module.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_envelope_generator.jpg
    alignment: left
  -
    type: text
    text: '<h2>Inputs, Outputs, and Controls</h2><p><strong>Gate Button</strong>- Manually initiates the envelope generator cycle for as long as it''s held. The same as sending a gate voltage to the <em>Gate In</em>&nbsp;jack.</p><p><strong>Gate In jack</strong>- This is where you''ll patch gate voltages to initiate the envelope generator cycle. Most often this will come from the IO Panel <em>Gate</em>&nbsp;output. The standard gate voltage for Voltage Modular (and most hardware analog synths) is +5V, but the Envelope Generator module will function with gate voltages as low as +2.5V.</p><ul><li><strong>Can I use a "trigger" to trigger an envelope generator?&nbsp;</strong>It would seem logical, but the answer is, "sometimes, but generally, no." First let''s clarify the difference between a gate signal and a trigger signal:<ul><li>A <strong>gate</strong> is a <em>constant</em>&nbsp;voltage. If you''re playing a keyboard, it remains high (i.e. +5V) as long as the key is held down.&nbsp;</li><li>A <strong>trigger</strong> is a <em>rapid spike</em> of +5V. It''s useful for a number of things (like turning stuff on and off, or triggering "one-shot" drum sounds or modules).</li></ul></li></ul><p>Getting back to the Cherry Audio Envelope Generator module, like most standard envelope generators, it needs to see a constant gate voltage to move through the <em>Attack</em>&nbsp;and <em>Decay</em>&nbsp;phases and hold during the <em>Sustain</em>&nbsp;phase. Removing the gate voltage following the <em>Sustain</em>&nbsp;phase tells it to move to the <em>Release</em>&nbsp;stage. With all that in mind, using a trigger signal will cause the envelope generator to <em>immediately</em>&nbsp;jump to the <em>Release</em>&nbsp;phase (which might be useful in certain situations).</p><p>Some envelope generator modules can be used with a trigger signal if they have a "free-run" mode (for example, the Cherry Audio Perc EG module is <em>always</em>&nbsp;is in free-run mode and accepts gate or trigger signals). However, the standard Cherry Audio Envelope Generator module is designed to generally use gate signals.</p><p><strong>"A" (Attack) slider</strong>- Defines the length of time for voltage to rise from 0V to 5V when the gate voltage is applied.</p><p><strong>"D" (Decay) slider</strong>- Defines the length of time for voltage to fall from the <em>Attack</em>&nbsp;stage 5V peak to <em>Sustain</em>&nbsp;stage setting.</p><p><strong>"S" (Sustain) slider</strong>- Sets the held voltage level following <em>Attack</em>&nbsp;and <em>Decay</em>&nbsp;phases.</p><p><strong>"R" (Release) slider</strong>- Defines the length of time for voltage to fall from <em>Sustain</em>&nbsp;level to 0V when gate is released.</p><p><strong>LED stage indicators</strong>- In case it wasn''t obvious, these guys illuminate to show the currently active envelope stage, and besides, the more blinking lights, the better!</p><p><strong>Env Out and Env Out Inv</strong>- These are the envelope voltage outputs. The <em>Env Out</em>&nbsp;voltage ranges from 0V to +5V, whereas the <em>Env Out Inv</em>&nbsp;jack is an inverted version, with output ranging from 0V to -5V.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Envelope Generator module is a standard "ADSR"-style envelope generator most often used to shape amplitude or filter curves.'
  image: /assets/social-modules/envelope-generator.png
id: e2604978-dd4b-4728-bfdc-2791f08d87c0
slug: envelope-generator
blueprint: documentation
