import { defineConfig } from 'astro/config';
// CloudPress WordPress + Astro 프론트엔드 설정 (자동 생성 — PHP/JS 변환)
export default defineConfig({
  output: 'static',
  build: { assets: 'assets' },
  site: 'https://cp-4e4ae208-wp.choichoi3227.workers.dev',
});
