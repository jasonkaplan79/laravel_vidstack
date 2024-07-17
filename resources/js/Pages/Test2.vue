<template>
    <div class="w-1/2">
        <media-player
            view-type="video"
            stream-type="on-demand"
            log-level="warn"
            crossorigin
            playsinline
            title="Sprite Fight"
            poster="https://files.vidstack.io/sprite-fight/poster.webp"
        >
            <media-provider>
                <media-poster class="vds-poster"></media-poster>
                <source src="https://files.vidstack.io/sprite-fight/hls/stream.m3u8" />
                <track
                    src="https://files.vidstack.io/sprite-fight/subs/english.vtt"
                    label="English"
                    language="en-US"
                    kind="subtitles"
                    type="vtt"
                    default
                />
                <track
                    src="https://files.vidstack.io/sprite-fight/subs/spanish.vtt"
                    label="Spanish"
                    language="es-ES"
                    kind="subtitles"
                    type="vtt"
                />
                <track
                    src="https://files.vidstack.io/sprite-fight/chapters.vtt"
                    language="en-US"
                    kind="chapters"
                    type="vtt"
                    default
                />
            </media-provider>
            <media-video-layout
                thumbnails="https://files.vidstack.io/sprite-fight/thumbnails.vtt"
            ></media-video-layout>
        </media-player>
    </div>


    <div class="w-1/3">
        <media-player
            view-type="video"
            stream-type="on-demand"
            log-level="warn"
            crossorigin
            playsinline
            title="Sprite Fight"
            poster="https://files.vidstack.io/sprite-fight/poster.webp"
        >
            <media-provider>
                <media-poster class="vds-poster"></media-poster>
                <source src="https://files.vidstack.io/sprite-fight/hls/stream.m3u8" />
                <track
                    src="https://files.vidstack.io/sprite-fight/subs/english.vtt"
                    label="English"
                    language="en-US"
                    kind="subtitles"
                    type="vtt"
                    default
                />
                <track
                    src="https://files.vidstack.io/sprite-fight/subs/spanish.vtt"
                    label="Spanish"
                    language="es-ES"
                    kind="subtitles"
                    type="vtt"
                />
                <track
                    src="https://files.vidstack.io/sprite-fight/chapters.vtt"
                    language="en-US"
                    kind="chapters"
                    type="vtt"
                    default
                />
            </media-provider>
            <media-video-layout
                thumbnails="https://files.vidstack.io/sprite-fight/thumbnails.vtt"
            ></media-video-layout>
        </media-player>
    </div>

</template>


<script setup>
// Import styles.
import 'vidstack/player/styles/default/theme.css';
import 'vidstack/player/styles/default/layouts/video.css';

import 'vidstack/player';
import 'vidstack/player/layouts/default';
import 'vidstack/player/ui';
</script>

<style scoped>

</style>
