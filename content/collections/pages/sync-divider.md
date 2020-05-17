title: 'Sync Divider'
body:
  -
    type: text
    text: '<h1>SYNC DIVIDER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_sync-divider.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Sync Divider can be used to synchronize sequencers and other modules within Voltage Modular to a host DAW. The <em>Sync Out</em> jack in the Transport section of the I/O Panel transmits a constant 96-pulse-per-quarter-note (PPQN) signal based on the tempo of the DAWs session. The Sync Divider is used to “slow down” the super-fast sync signal to musically relevant note-values from 1/32-notes to 4 bars, including dotted and triplet values.&nbsp;</p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>Sync In jack</strong>- Patch the <em>Sync Out </em>jack from the Transport section of the I/O Panel to this jack to receive a sync signal from your DAW that can be used to synchronize sequencers and other modules in Voltage Modular.</p><p><strong>Reset jack</strong>- A 5V pulse or gate received at this jack will immediately force-reset the clock.&nbsp;</p><ul><li>It’s important to understand that sync signals have no idea where the "one" is, or whether your DAW is playing or stopped. If a sync signal is routed to the&nbsp;Sync Divider&nbsp;module and its clock is sent to a sequencer, the sequencer will play at the same tempo as the host DAW project, but “shifted” in time by some random (and usually undesirable) amount. To avoid this the Sync Divider, all sequencers, and many other modules have&nbsp;<em>Reset</em>&nbsp;input jacks. Patching the&nbsp;<em>Play</em>&nbsp;output jack from the Transport section of the I/O Panel to these resets the modules to “one” the instant the DAW play button is pressed, forcing everything to play in time.</li></ul><p><strong>Note Value</strong>- Selects the note-value of the clock output pulses from 1/32-notes to 4 bars. Any of the selected note-values can be changed to a triplet or dotted note-value by clicking the corresponding buttons which light up green when engaged.</p>'
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
  description: 'Allows accurate synchronization to DAW software using the Voltage IO Panel Sync Out jack. Divides from four bars to 1/32-notes, including dotted and triplet values.'
  image: /assets/social-modules/sync-divider.png
id: 2fc140f3-28e6-4fdc-a370-a2394b77d0ff
slug: sync-divider
blueprint: documentation
