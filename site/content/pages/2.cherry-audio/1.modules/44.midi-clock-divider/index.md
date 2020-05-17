title: 'MIDI Clock Divider'
body:
  -
    type: text
    text: '<h1>MIDI CLOCK DIVIDER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-clock-divider.jpg
    alignment: left
  -
    type: text
    text: '<p>The MIDI Clock Divider allows Voltage Modular to be synced to external devices such as drum machines, synths, and sequencers which are capable of sending MIDI clock. This module divides a 24-pulse-per-quarter-note MIDI clock signal into slower, musically relevant note-values, and outputs a voltage-based clock signal that can be used to advance sequencers, switches, etc. inside of Voltage Modular. Clock divisions can be set from 1/32-notes to 4 bars including triplet and dotted values.</p><h2><strong>Inputs, Outputs, and Controls</strong></h2><p><strong>MIDI Clk In jack</strong>- This is the MIDI input jack that will receive MIDI clock from an external device. Typically this will be patched to the <em>From Host</em> MIDI jack on the I/O Panel or the <em>MIDI Out</em> jack of a MIDI In module.</p><p><strong>Reset jack</strong>- A 5V pulse received at this jack will immediately reset the clock divider. Note that most devices that send MIDI clock also send "Start" messages when the external device’s Play button is pressed which will automatically reset the MIDI Clock Divider. Remember to reset any sequencers, switches, etc. that are being triggered by the clock divider as well so that everything starts at the same time.</p><p><strong>Note Value</strong>- Selects the note-value of the clock output pulses from 1/32-notes to 4 bars. Any of the selected note-values can be changed to a triplet or dotted note-value by clicking the corresponding buttons which light up green when engaged.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_sync-divider-triplet-dotted.jpg
    alignment: left
  -
    type: text
    text: '<ul><li>For anyone unfamiliar with rhythmic note-values, a triplet clock will pulse three times for every two regular pulses of the same note-value, while a dotted-note clock will pulse twice for every three regular note-value pulses.</li></ul><p><strong>Clock Out jack</strong>- Outputs 5V clock pulses for syncing other modules in Voltage Modular. Often this will be patched to the external clock input of a sequencer but can be used for any number of things including advancing switches, resetting LFOs, and triggering sample and hold modules.</p>'
template: documentation
seo:
  description: 'The MIDI Clock Divider allows Voltage Modular to be synced to external devices such as drum machines, synths, and sequencers which are capable of sending MIDI clock.'
fieldset: documentation
id: 231ccb04-d54c-4ac4-b5da-4c90fa5f9557
