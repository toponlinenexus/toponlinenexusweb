const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

const logoPath = path.join(__dirname, '..', 'public', 'img', 'top-online-nexus-logo.png');

async function main() {
    const image = sharp(logoPath).ensureAlpha();
    const { data, info } = await image.raw().toBuffer({ resolveWithObject: true });

    for (let i = 0; i < data.length; i += 4) {
        const r = data[i];
        const g = data[i + 1];
        const b = data[i + 2];
        const max = Math.max(r, g, b);
        const min = Math.min(r, g, b);
        const saturation = max - min;

        if (max < 28 && saturation < 12) {
            data[i + 3] = 0;
        } else if (max < 55 && saturation < 18) {
            data[i + 3] = Math.min(data[i + 3], Math.round(((max - 28) / 27) * 255));
        }
    }

    await sharp(data, {
        raw: {
            width: info.width,
            height: info.height,
            channels: 4,
        },
    })
        .png()
        .toFile(logoPath);

    console.log('Transparent PNG saved:', logoPath);
}

main().catch((error) => {
    console.error(error);
    process.exit(1);
});
