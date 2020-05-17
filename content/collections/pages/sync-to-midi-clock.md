title: 'Sync To MIDI Clock'
body:
  -
    type: text
    text: '<h1>SYNC TO MIDI CLOCK</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_sync-to-midi-clock.jpg
    alignment: left
  -
    type: text
    text: '<p>The Sync To MIDI Clock module converts a Sync signal to MIDI Clock messages for syncing external MIDI devices such as drum machines, synths, and sequencers to your host DAW’s tempo when using Voltage Modular as a plug-in instrument. The Transport In section''s&nbsp;<em>Stop</em> and <em>Play</em> jacks can be patched to the Transport output jacks in the I/O Panel to send MIDI Stop and MIDI Start messages to external devices each time your DAW is stopped and started.</p><h2>Inputs and Outputs</h2><p><strong>Sync In</strong>- Patch this to the <em>Sync Out</em> jack in the Transport section of the I/O Panel to receive a sync signal at the tempo of your host DAW.</p><p><strong>Transport In Stop jack</strong>- Patch this to the <em>Stop</em> jack in the Transport section of the I/O Panel to send a MIDI Stop message to external devices each time the Stop button in your DAW is pressed.</p><p><strong>Transport In Play jack</strong>- Patch this to the <em>Play</em> jack in the Transport section of the I/O Panel to send a MIDI Start message to external devices each time the Play button in your DAW is pressed.</p><p><strong>MIDI Clk Out</strong>- Patch this to the <em>MIDI In</em> jack of a MIDI Out module to send MIDI Clock (including MIDI Start and Stop messages) to an external device.</p>'
template: documentation
seo:
  description: 'The Sync To MIDI Clock module converts a Sync signal to MIDI Clock messages for syncing external MIDI devices such as drum machines, synths, and sequencers to your host DAW’s tempo when using Voltage Modular as a plug-in instrument.'
id: ac10620f-80c7-481f-bf58-7d8c9dd8490a
slug: sync-to-midi-clock
blueprint: documentation
