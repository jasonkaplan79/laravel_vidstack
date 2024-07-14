<template>
    <div>
        <media-player
            .viewType="video"
            .streamType="on-demand"
            .logLevel="warn"
            .crossOrigin="true"
            .playsInline="true"
            .title="Sprite Fight"
            .poster="https://files.vidstack.io/sprite-fight/poster.webp"
        >
            <media-provider>
                <media-poster class="vds-poster"></media-poster>
                <source src="https://files.vidstack.io/sprite-fight/720p.mp4" />
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
                .thumbnails="https://files.vidstack.io/sprite-fight/thumbnails.vtt"
            ></media-video-layout>
        </media-player>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import '@vidstack/react/player/styles/default/theme.css';
import '@vidstack/react/player/styles/default/layouts/audio.css';
import '@vidstack/react/player/styles/default/layouts/video.css';

import 'vidstack/player';
import 'vidstack/player/layouts/default';
import 'vidstack/player/ui';

// import 'vidstack/bundle';

</script>

