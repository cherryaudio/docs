title: 'Clock Divider'
body:
  -
    type: text
    text: '<h1><strong>CLOCK DIVIDER</strong></h1>'
  -
    type: image
    image:
      - /assets/modules/ug_clock-divider.jpg
    alignment: left
  -
    type: text
    text: '<p>The Clock Divider is a dual module that slows incoming clock pulses by a factor of two to sixteen. The modules can run independently from one another or be linked so that the clock input and reset jacks from the first module are shared by both.</p><p><strong>So what does it mean to divide a clock signal?</strong></p><p>When a clock signal is divided, the timing of its pulses are not changed. Instead, the Clock Divider creates a new pulse-wave signal that represents only a fraction of the pulses received at the input.</p><p>Let’s look at a sixteenth-note clock signal as an example. Dividing by a factor of two means that one pulse is output for every two pulses received resulting in an eighth note clock signal. Dividing by a factor of three means that one pulse is output for every three received which is the equivalent of dotted-eighth notes. Dividing by a factor of seven doesn’t result in a common note duration, but the same principle is used. The divider only outputs one pulse for every seven pulses which by the way can create some really cool poly-rhythms!</p>'
  -
    type: image
    image:
      - /assets/modules/ug_clock-divider-image1.jpg
    alignment: left
  -
    type: text
    text: '<p>It is worth noting that the input signal doesn’t need to be a designated clock signal. Any voltage transition from below 2.5V to 2.5V or higher will be interpreted as a pulse meaning you can use an LFO, the gate signal from a MIDI controller, or even an audio signal!&nbsp;<br></p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>In jack</strong>- Input jack for the clock signal that will be divided. When the modules are linked the input signal from module one is internally routed to module two.&nbsp;</p><p><strong>Reset jack</strong>- A 5V pulse or gate signal received at this jack will force the divided clock signal to restart on the next pulse received at the input jack. When the modules are linked the reset jack from module one will reset module two as well.&nbsp;<br></p><p><strong>Divide By</strong>- This is the factor by which the clock signal will be divided. It can be set from one to sixteen by clicking on the up and down arrows to the left of the number display. A <em>Divide By</em> factor of one means the clock input will be unchanged (because duh, anything divided by one is itself!) but is a convenient way to temporarily bypass any clock division. A factor of two means one pulse is output for every two pulses received at the input. A factor of nine means one pulse is output for every nine pulses. You get the idea.&nbsp;</p><p><strong>Out jack</strong>- Outputs the divided clock signal.&nbsp;<br></p><p><strong>Input Link</strong>- When engaged, the input and reset jacks from module one are sent internally to module two. If a cable is patched to either of module two’s inputs, the signal from the cable will “override” the link.<br></p>'
template: documentation
seo:
  description: 'The Clock Divider is a dual module that slows incoming clock pulses by a factor of two to sixteen.'
  image: /assets/social-modules/clock-divider.png
id: c12e70e8-77cf-4d6e-a85f-746849207d74
slug: clock-divider
blueprint: documentation
